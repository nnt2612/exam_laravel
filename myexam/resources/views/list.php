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
    <h1>List Category</h1>
    <div class="card">
        <div class="card-body">
            <h3 class="card-title float-left">
                {{__('message.list_product')}}
                <small class="text-muted">{{__('message.show_all_bakery')}}</small>
            </h3>
            <a href="/admin/bakery/create" class="btn float-right"><i class="fas fa-plus-circle"></i> {{__('message.create_new')}}</a>
            <div class="clearfix"></div>
            <div class="alert alert-success d-none" role="alert" id="messageSuccess"></div>
            <div class="alert alert-danger d-none" role="alert" id="messageError"></div>


            <table class="table table-striped">
                <thead>
                <tr class="row">
                    <th class="col-md-1"></th>
                    <th class="col-md-1">{{__('message.id')}}</th>
                    <th class="col-md-2">{{__('message.thumbnail')}}</th>
                    <th class="col-md-2">{{__('message.name')}}</th>
                    <th class="col-md-2">{{__('message.description')}}</th>
                    <th class="col-md-1">{{__('message.price')}}</th>
                    <th class="col-md-3">{{__('message.action')}}</th>
                </tr>
                </thead>
                <tbody>
</body>