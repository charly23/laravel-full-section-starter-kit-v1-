@extends('layouts.header')

@section('content')
<div class="container">
    <div class="row">

        <div class="header col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Header</div>
            </div>
        </div>

        <div class="container col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Container</div>
            </div>
        </div>

        <?php
            $widget = new \App\library\widget;
        ?>

        <div class="column-main">
            <div class="column-1 col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <?php
                            echo $widget::columns( 1 );
                        ?>
                    </div>
                </div>
            </div>
            <div class="column-2 col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <?php
                            echo $widget::columns( 2 );
                        ?>
                    </div>
                </div>
            </div>
            <div class="column-3 col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <?php
                            echo $widget::columns( 3 );
                        ?>
                    </div>
                </div> 
            </div>
        </div>

    </div>
</div>
@endsection
