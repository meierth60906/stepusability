<!-- Sortierfunktion Testaufgaben -->
$(function  () {

    var adjustment;

    $("ol.scenario-container").sortable({
        nested: true,
        delay: 100,
        placeholderClass: 'placeholder',
        placeholder: "<li class='placeholder' style='border: 2px dashed #a9a9a9; border-radius: 5px; height: 60px;'></li>",


        isValidTarget: function ($item, container) {
            var depth = 1, // Start with a depth of one (the element itself)
                maxDepth = 2,
                children = $item.find('ol'); /*.first().find('li'); */


            // Add the amount of parents to the depth
            depth += container.el.parents('ol').length;

            // Increment the depth for each time a child
            while (children.length) {
                depth++;
                children = children.find('ol'); /*.first().find('li');*/
            }

            return depth <= maxDepth;
        },
        // animation on drop
        onDrop: function  ($item, container, _super) {

            var $clonedItem = $('<li/>').css({height: $item.height()});
            $item.before($clonedItem);
            $clonedItem.animate({'height': $item.height()});

            $item.animate($clonedItem.position(), function  () {
                $clonedItem.detach();
                _super($item, container);
            });

            if($item.is('.task') && $item.parent().is('.task-container')) {
                $item.removeClass("element-allgemein mb-3");
            } else {
                $item.addClass("element-allgemein mb-3");
            }



        },
        update: function() {
            var dataToSend = $("ol.scenario-container").sortable("serialize", {attribute: 'data-order'}).get();

            console.log(dataToSend);

            var jsonString = JSON.stringify(dataToSend, null, ' ');

            console.log(jsonString);

            $.ajax({
                url: "../logic/sortTasks.php",
                type: "POST",
                data: {"sortedList":dataToSend},
                cache: false,
                dataType: "json",
                success: function () {
                }
            });
        },
        // set $item relative to cursor position
        onDragStart: function ($item, container, _super) {
            var offset = $item.offset(),
                pointer = container.rootGroup.pointer;

            adjustment = {
                left: pointer.left - offset.left,
                top: pointer.top - offset.top
            };

            _super($item, container);
        },
        onDrag: function ($item, position) {
            $item.css({
                left: position.left - adjustment.left,
                top: position.top - adjustment.top
            });
        }
    });


});

<!-- Sortierfunktion PostSession -->
$(function () {
    $("ol.postSession-container").sortable({
        exclude: ".postSessionRubrik",
        delay: 100,
        placeholderClass: 'placeholder',
        placeholder: "<li class='placeholder' style='border: 2px dashed #a9a9a9; border-radius: 5px; height: 60px;'></li>",
        isValidTarget: function($item, container) {
            if( !$item.closest("ol").is(container.el)){
                return false;
                // additional rules
            } else return true;
        },
        // animation on drop
        onDrop: function  ($item, container, _super) {

            var $clonedItem = $('<li/>').css({height: $item.height()});
            $item.before($clonedItem);
            $clonedItem.animate({'height': $item.height()});

            $item.animate($clonedItem.position(), function  () {
                $clonedItem.detach();
                _super($item, container);
            });

        },

        // set $item relative to cursor position
        onDragStart: function ($item, container, _super) {
            var offset = $item.offset(),
                pointer = container.rootGroup.pointer;

            adjustment = {
                left: pointer.left - offset.left,
                top: pointer.top - offset.top
            };

            _super($item, container);
        },
        onDrag: function ($item, position) {
            $item.css({
                left: position.left - adjustment.left,
                top: position.top - adjustment.top
            });
        }
    });
});

// <!-- Sortierfunktion Agreement -->
// $(function () {
//     $("ol.agreement-container").sortable({
//         exclude: ".agreementRubrik",
//         delay: 100,
//         placeholderClass: 'placeholder',
//         placeholder: "<li class='placeholder' style='border: 2px dashed #a9a9a9; border-radius: 5px; height: 60px;'></li>",
//         isValidTarget: function($item, container) {
//             if( !$item.closest("ol").is(container.el)){
//                 return false;
//                 // additional rules
//             } else return true;
//         },
//         // animation on drop
//         onDrop: function  ($item, container, _super) {
//
//             var $clonedItem = $('<li/>').css({height: $item.height()});
//             $item.before($clonedItem);
//             $clonedItem.animate({'height': $item.height()});
//
//             $item.animate($clonedItem.position(), function  () {
//                 $clonedItem.detach();
//                 _super($item, container);
//             });
//
//         },
//
//         // set $item relative to cursor position
//         onDragStart: function ($item, container, _super) {
//             var offset = $item.offset(),
//                 pointer = container.rootGroup.pointer;
//
//             adjustment = {
//                 left: pointer.left - offset.left,
//                 top: pointer.top - offset.top
//             };
//
//             _super($item, container);
//         },
//         onDrag: function ($item, position) {
//             $item.css({
//                 left: position.left - adjustment.left,
//                 top: position.top - adjustment.top
//             });
//         }
//     });
// })
//
//
// $(function () {
//     $("ol.protocol-container").sortable({
//         exclude: ".protocolRubrik",
//         delay: 100,
//         placeholderClass: 'placeholder',
//         placeholder: "<li class='placeholder' style='border: 2px dashed #a9a9a9; border-radius: 5px; height: 60px;'></li>",
//         isValidTarget: function($item, container) {
//             if( !$item.closest("ol").is(container.el)){
//                 return false;
//                 // additional rules
//             } else return true;
//         },
//         // animation on drop
//         onDrop: function  ($item, container, _super) {
//
//             var $clonedItem = $('<li/>').css({height: $item.height()});
//             $item.before($clonedItem);
//             $clonedItem.animate({'height': $item.height()});
//
//             $item.animate($clonedItem.position(), function  () {
//                 $clonedItem.detach();
//                 _super($item, container);
//             });
//
//         },
//
//         // set $item relative to cursor position
//         onDragStart: function ($item, container, _super) {
//             var offset = $item.offset(),
//                 pointer = container.rootGroup.pointer;
//
//             adjustment = {
//                 left: pointer.left - offset.left,
//                 top: pointer.top - offset.top
//             };
//
//             _super($item, container);
//         },
//         onDrag: function ($item, position) {
//             $item.css({
//                 left: position.left - adjustment.left,
//                 top: position.top - adjustment.top
//             });
//         }
//     });
// });


$(function () {
    $("ol.conclusion-container").sortable({
        exclude: ".conclusionRubrik",
        delay: 100,
        placeholderClass: 'placeholder',
        placeholder: "<li class='placeholder' style='border: 2px dashed #a9a9a9; border-radius: 5px; height: 60px;'></li>",
        isValidTarget: function($item, container) {
            if( !$item.closest("ol").is(container.el)){
                return false;
                // additional rules
            } else return true;
        },
        // animation on drop
        onDrop: function  ($item, container, _super) {

            var $clonedItem = $('<li/>').css({height: $item.height()});
            $item.before($clonedItem);
            $clonedItem.animate({'height': $item.height()});

            $item.animate($clonedItem.position(), function  () {
                $clonedItem.detach();
                _super($item, container);
            });

        },

        // set $item relative to cursor position
        onDragStart: function ($item, container, _super) {
            var offset = $item.offset(),
                pointer = container.rootGroup.pointer;

            adjustment = {
                left: pointer.left - offset.left,
                top: pointer.top - offset.top
            };

            _super($item, container);
        },
        onDrag: function ($item, position) {
            $item.css({
                left: position.left - adjustment.left,
                top: position.top - adjustment.top
            });
        }
    });
});