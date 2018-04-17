@extends("layouts.app")
@section("content")
<form class="form-horizontal" method="get" action="http://localhost/php24_project/password/compare-key">
                        <input type="hidden" name="_token" value="yAeXuJTDAPBoZe1k0HV4FwbVVDSkz2m02TihCMnn">
<div class="row">
    <div class="col-md-8 col-md-offset-2">
    <div class="col-md-6">
      <input type="email" class="form-control" name="email" value="{{ $email_1 }}" readonly="">
                            </div>
                        </div>
</div>
<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password&nbsp;
                    <?php if (isset($info)) {

                    echo "<p style='color:red'><i class='fa fa-ban'></i>".$info." không tồn tại </p> ";
                } ?>
                </div>

                <div class="panel-body">
                    
                    

                        <div class="form-group">

                            <label for="email" class="col-md-4 control-label">Get keycode</label>
                            
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="key" value="" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    So sánh mã
                                </button>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
                    </form>
    @endsection