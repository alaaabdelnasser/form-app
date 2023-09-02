<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
</head>
<body>
<div class="container">

    <form method="post" action="{{route('answers-store',$form->id)}}" id="fb-render">

    </form>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src="https://formbuilder.online/assets/js/form-render.min.js"></script>


<script>


    jQuery(function ($) {
        var FormData = JSON.parse(@json($form->json));

        var defaults = {
            container: false,
            formData: FormData,
            dataType: 'json',
            label: {
                formRendered: 'Form Rendered',
                noFormData: 'No form data.',
                other: 'Other',
                selectColor: 'Select Color'
            },
            render: true,
        }
        var fbRender = document.getElementById('fb-render');
        window.fbRender = fbRender;
        $(fbRender).formRender(defaults);

        fbRender.innerHTML += '@csrf';

        fbRender.innerHTML += '<button>Submit</button>';


    });


</script>
</body>
</html>

