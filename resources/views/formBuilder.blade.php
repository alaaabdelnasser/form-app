<!DOCTYPE html>
<html>
<head>
    <title>Example formBuilder</title>
</head>
<body>
<div class="container">

    <div id="fb-editor"></div>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src="https://formbuilder.online/assets/js/form-builder.min.js"></script>

<form method="post" action="{{route('data-store')}}">
    @csrf

    <input type="hidden" name="jsoninput" value="" id="jsoninput">
    <button class="btn btn-primary" onclick="return validateMyForm()">
        Save
    </button>
</form>
<script>

    jQuery($ => {
        var options = {
            disabledActionButtons: ['save', 'data']
        };
        const fbEditor = document.getElementById("fb-editor");
        const formBuilder = $(fbEditor).formBuilder(options);
        window.formBuilder = formBuilder;
    });


    function validateMyForm() {

        document.getElementById('jsoninput').setAttribute("value", JSON.stringify(formBuilder.actions.getData()))

    }

</script>
</body>
</html>

