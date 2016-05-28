/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */




(function() {
    
        var $container = $("#isotopeContainer");

        $container.imagesLoaded(function() {
            $container.isotope({
                itemSelector: ".span3",
                layoutMode: "fitRows",
                getSortData: {
                    price: function($elm) {
                        return $elm.data("price");
                    },
                    name: function($elm) {
                        return $elm.find(".isotope--title").text();
                    },
                    popularity: function($elm) {
                        return $elm.data("popularity");
                    }
                }
            });


            //  ========== 
            //  = Filters for sidebar = 
            //  ========== 
            var $selectableElms = $(".sidebar-filters .selectable");
            $selectableElms.click(function(ev) {
                ev.preventDefault();
                $(this).toggleClass("selected");
                updateIsotopeFiltering();
            });
            $(".sidebar-filters .accordion-toggle").click(function() {
                setTimeout(updateIsotopeFiltering, 350);
            });
            $("#removeFilters").click(function(ev) {
                ev.preventDefault();
                $selectableElms.removeClass("selected");
                updateIsotopeFiltering();
            });
            var updateIsotopeFiltering = function() {
                var selectedElms = $(".sidebar-filters .in").find(".selectable.selected[data-target]").not(".detailed"), detailedElms = $(".sidebar-filters .in").find(".detailed.selected[data-target]"), filterString, filter, types = [];
                if (selectedElms.length > 0 || detailedElms.length > 0) {
                    $("#removeFilters").fadeIn();
                } else {
                    $("#removeFilters").fadeOut();
                }
                if (selectedElms.length < 1) {
                    filterString = ".isotope-container .span3";
                } else {
                    var filterArr = [];
                    selectedElms.each(function() {
                        var data = $(this).data("target");
                        if ("undefined" !== typeof data) {
                            filterArr.push($(this).data("target"));
                        }
                    });
                    filterString = filterArr.join(",");
                }
                // basic filtering
                filter = $(filterString);
                // slider price filtering, after we have the right categories already
                if ($slider.parents(".accordion-body").hasClass("in")) {
                    filter = filter.filter(function() {
                        var $this = $(this);
                        return $this.data("price") >= $slider.slider("values", 0) && $this.data("price") <= $slider.slider("values", 1);
                    });
                }
                // more precise filters for the size, color, brand ...
                detailedElms.each(function() {
                    types.push($(this).data("type"));
                });
                types = _.uniq(types);
                if (detailedElms.length > 0) {
                    _.each(types, function(type) {
                        var allowedValues = [];
                        detailedElms.filter('[data-type="' + type + '"]').each(function() {
                            allowedValues.push($(this).data("target"));
                        });
                        filter = filter.filter(function() {
                            var $this = $(this);
                            return _.some($this.data(type).split("|"), function(val) {
                                return _.contains(allowedValues, val);
                            });
                        });
                    });
                }
                $container.isotope({
                    filter: filter
                });
            };
            updateIsotopeFiltering();
            //  ========== 
            //  = Sorting = 
            //  ========== 
            $("#isotopeSorting").change(function() {
                var parameters = jQuery.parseJSON($(this).val());
                parameters.sortAscending = "true" === parameters.sortAscending ? true : false;
                $container.isotope(parameters);
            });
            $("#isotopeSorting").trigger("change");
        });
    })();