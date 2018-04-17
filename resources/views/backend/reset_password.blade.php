@extends("layouts.app")
@section("content")
<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password&nbsp;

                <?php if (isset($email)) {

                    echo "<p style='color:red'><i class='fa fa-ban'></i>".$email." không tồn tại </p> ";
                } ?>
                </div>

                <div class="panel-body">
                    
                    <form class="form-horizontal" method="get" action="{{ url('password/key') }}">
                        <input type="hidden" name="_token" value="yAeXuJTDAPBoZe1k0HV4FwbVVDSkz2m02TihCMnn">

                        <div class="form-group">

                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="" required>

                                                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Gửi mã xác nhận 
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection