<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" >
<div class="container">
    <div class="row">

        <section class="content">
            <h1 style="display: flex;align-items: center;justify-content: center;">Your Appointments</h1>
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="pull-right">
                            <div class="btn-group">
                                <button type="button" class="btn btn-success btn-filter" data-target="UPCOMING">UPCOMING</button>
                                <button type="button" class="btn btn-warning btn-filter" data-target="PAST">PAST</button>
                                <button type="button" class="btn btn-danger btn-filter" data-target="MISSED">MISSED</button>
                                <button type="button" class="btn btn-default btn-filter" data-target="all">ALL</button>
                            </div>
                        </div>
                        <div class="table-container">
                            <table class="table table-filter">
                                <tbody>
                                <tr data-status="UPCOMING">


                                    <td>
                                        <div class="media">

                                            <div class="media-body">
                                                <span class="media-meta pull-right">Febrero 13, 2016</span>
                                                <h4 class="title">
                                                    Lorem Impsum
                                                    <span class="pull-right UPCOMING">(UPCOMING)</span>
                                                </h4>
                                                <p class="summary">UPCOMING</p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr data-status="PAST">

                                    <td>
                                        <div class="media">

                                            <div class="media-body">
                                                <span class="media-meta pull-right">Febrero 13, 2016</span>
                                                <h4 class="title">
                                                    Lorem Impsum
                                                    <span class="pull-right PAST">(PAST)</span>
                                                </h4>
                                                <p class="summary">pendient</p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr data-status="MISSED">

                                    <td>
                                        <div class="media">

                                            <div class="media-body">
                                                <span class="media-meta pull-right">Febrero 13, 2016</span>
                                                <h4 class="title">
                                                    Lorem Impsum
                                                    <span class="pull-right MISSED">(MISSED)</span>
                                                </h4>
                                                <p class="summary">cancel</p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr data-status="UPCOMING" class="selected">

                                    <td>
                                        <div class="media">

                                            <div class="media-body">
                                                <span class="media-meta pull-right">Febrero 13, 2016</span>
                                                <h4 class="title">
                                                    Lorem Impsum
                                                    <span class="pull-right UPCOMING">(UPCOMING)</span>
                                                </h4>
                                                <p class="summary">UPCOMING2</p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr data-status="PAST">

                                    <td>
                                        <div class="media">

                                            <div class="media-body">
                                                <span class="media-meta pull-right">Febrero 13, 2016</span>
                                                <h4 class="title">
                                                    Lorem Impsum
                                                    <span class="pull-right PAST">(PAST)</span>
                                                </h4>
                                                <p class="summary">pendie2</p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
<script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="<?php echo base_url(); ?>/assets/js/appointments.js" type="text/javascript"></script>