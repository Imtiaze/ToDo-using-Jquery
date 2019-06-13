<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-offset-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        Jquery Lists
                        <a data-toggle="modal" data-target="#exampleModal" href=""><i class="fa fa-plus pull-right" style="color:blue"></i></a>
                        
                    </div>
                    <div class="card-body">
                        <div class="card" >
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item ourItem" data-toggle="modal" data-target="#exampleModal">Dapibus ac facilisis in</li>
                                <li class="list-group-item ourItem" data-toggle="modal" data-target="#exampleModal">Cras justo odio</li>
                                <li class="list-group-item ourItem" data-toggle="modal" data-target="#exampleModal">Vestibulum at eros</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="title">Add New Item</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" placeholder="Write Item here" id="addItem" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" style="display:none;" id="delete">Delete</button>
                    <button type="button" class="btn btn-primary" style="display:none;" id="saveChanges">Save changes</button>
                    <button type="button" class="btn btn-primary" id="addButton">Add Item</button>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
        
        $(document).ready(function() {
            $('.ourItem').each(function(index, el) {
                $(this).click(function(event) {
                    let text = $(this).text();
                    $('#title').text('Edit Item');
                    $('#delete').show(200);
                    $('#saveChanges').show(200);
                    $('#addButton').hide(200);
                    $('#addItem').val(text);
                    console.log(text);
                });
            });
        });

    </script>
</body>
</html>