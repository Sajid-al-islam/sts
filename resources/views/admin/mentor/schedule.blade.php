@extends('admin.layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-8 offset-2 mt-5">
            <div class="card">
                <div class="card-header bg-info">
                    <h6 class="text-white">Create Class Schedule</h6>
                </div>
                <div class="card-body">
                    <form method="post" action="" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Schedule Name"/>
                        </div>  
                        <div class="row">
                            <div class="col-md-6">
                            <label><strong>Select Day :</strong></label><br/>
                            <select id="framework" name="day[]" multiple class="form-control" >
                                <option value="Codeigniter">Saturday</option>
                                <option value="CakePHP">Sunday</option>
                                <option value="Laravel">Monday</option>
                                <option value="YII">Tuesday</option>
                                <option value="Zend">Wednesday</option>
                                <option value="Symfony">Thurday</option>
                                <option value="Phalcon">Friday</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label><strong>Select Class :</strong></label><br/>
                            <select id="framework" name="class[]" multiple class="form-control" >
                                <option value="Codeigniter">Class 5</option>
                                <option value="CakePHP">Class 6</option>
                                <option value="Laravel">Class 7</option>
                                <option value="YII">Class 8
                                <option value="Zend">Class 9</option>
                                <option value="Symfony">Class 10</option>
                                <option value="Phalcon">Class 11</option>
                                <option value="Phalcon">Class 12</option>
                            </select>
                        </div>
                        </div>
                      
                        <div class="text-center" style="margin-top: 10px;">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('select').selectpicker();
            });
        </script>
@endsection