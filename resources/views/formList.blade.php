<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">ID</th>
        <th scope="col">Form</th>
        <th scope="col">Answers</th>
    </tr>
    </thead>
    <tbody>
    @foreach($forms as $form)
        <tr>
            <td>{{$form->id}}</td>
               <td>
                <a class="btn btn-primary" href="{{route('show-form',$form->id)}}" role="button">view form</a>

            </td>

            <td>
                <a class="btn btn-primary" href="{{route('show-answers',$form->id)}}" role="button">view answer</a>

            </td>
        </tr>


    @endforeach
    </tbody>
</table>
</body>
</html>
