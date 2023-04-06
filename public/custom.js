var Accountant = function () {
    var initAccountantValidation = function () {
        $("#form_todo").validate({
            rules: {
                product_name: {
                    required: true,
                },
                category : {
                    required: true,

                },
                price :{
                    required: true,
                },
                discount:{
                    required:true,
                },
                description:{
                    required:true,
                }

            },
            messages: {
                product_name: {
                    required: "Product Name is required.",
                },
                category : {
                    required: "category is required.",
                },
                price :{
                    required: "Price is Required.",
                },
                discount:{
                    required:"Discount is Required.",
                },
                description:{
                    required:"Description is Required.",
                }

            }
        });
    };
    return {
        init: function () {
            initAccountantValidation();
        }
    };
}();
jQuery(document).ready(function () {
    Accountant.init();
});
