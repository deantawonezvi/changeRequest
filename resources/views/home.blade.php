@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card card-body card-default">
                <div class="card-title">Create New Change Request</div>

                <div class="panel-body">
                    //TODO: Add Submit Functionality and submit details to add record to db
                    <form action="{{url('/change-request/add')}}" method="post">
                        <div class="form-group">
                            <label for="name">Change Request Name</label>
                            <input name="name" id="name" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description"  class="form-control">
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="reason">Reason</label>
                            <textarea name="reason" id="reason" class="form-control">
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="priority">Priority</label>
                            <select name="priority" id="priority" class="form-control">
                                <option value="emergency">Emergency</option>
                                <option value="high">High</option>
                                <option value="medium">Medium</option>
                                <option value="low">Low</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="priority">Implementing Department</label>
                            <select name="priority" id="priority" class="form-control">
                                <option value="emergency">Emergency</option>
                                <option value="high">High</option>
                                <option value="medium">Medium</option>
                                <option value="low">Low</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="request_date">Date Of Request</label>
                            <input name="request_date" id="request_date" type="date" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="required_date">Change Required By Date</label>
                            <input name="required_date" id="required_date" type="date" class="form-control">
                        </div>

                        <hr>
                        <div class="form-group">
                            <label for="line_manager">Select Line Manager(s)</label>
                            <br>
                                @foreach($line_managers as $line_manager)
                                <label for="line_manager">{{$line_manager->name}}</label>
                                <input type="checkbox" name="{{'line_manager_'.$loop->iteration}}" value="{{$line_manager->id}}">
                                &nbsp;
                                &nbsp;
                                &nbsp;
                                &nbsp;
                                &nbsp;
                                @endforeach
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="line_manager">Select Line Manager(s)</label>
                            <br>
                                @foreach($managers as $manager)
                                <label for="line_manager">{{$manager->name}}</label>
                                <input type="checkbox" name="{{'manager'.$loop->iteration}}" value="{{$manager->id}}">
                                &nbsp;
                                &nbsp;
                                &nbsp;
                                &nbsp;
                                &nbsp;
                                @endforeach
                        </div>
                        <hr>





                    </form>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
