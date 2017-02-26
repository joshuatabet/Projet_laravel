@extends('layouts.app')

@section('content')
    <div class="bg-fluid container-fluid">
        <div class="margin-top row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="contact">
                            {{ csrf_field() }}
                            <label for="nom" class="col-md-4 control-label">Nom</label>
                            <div class="col-md-6">
                                <input id="nom" type="text" class="form-control" name="nom" value="" required autofocus>
                            </div>

                            <label for="mail" class="col-md-4 control-label">Mail</label>
                            <div class="col-md-6">
                                <input id="mail" type="text" class="form-control" name="mail" value="" required autofocus>
                            </div>
                            <label for="message" class="col-md-4 control-label">Message</label>
                            <div class="col-md-6">
                                <input id="message" type="text" class="form-control" name="message" value="" required autofocus>
                            </div>

                    </div>


                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Envoyer
                            </button>
                        </div>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
