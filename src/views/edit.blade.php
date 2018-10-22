<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit</title>
    <link type="text/css" href="{!! url('restful/css/css/bootstrap.min.css')!!}" rel="stylesheet">
     <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="/js/jquery.nestable.js"></script>
  </head>
  <body>

    <div class="container" style="margin-top:20px">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <table>
            <th><h3 class="panel-title">Edit -  </h3><th>
            <th><button type="submit" class="btn btn-success"><a href="{!! url('index') !!}">Home</a></button><th>
          </table>
          
        </div>
        <div class="panel-body">

          <form class="form-horizontal" role="form" method="post" action="{{ url('update/'.$data->id) }}" id="form" enctype="multipart/form-data">
              <input type="hidden" name="_method" id="menu-method" value="post">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="hidden" name="parent_id" id="menu-parent" value="0">
              <input type="hidden" name="position" id="menu-position" value="0">
              <input id='menu-id' style="display:none" value="111">
              
              <div class="form-group col-xs-12 form-element">
                <label class="control-label required">title</label>
                <input type="text" name="title" id="menu-title" class="form-control" required value="{{$data->title}}">
              </div>

              <div class="form-group col-xs-12 form-element">
                <label class="control-label">Link</label>
                <input type="text" name="link" id="menu-link" class="form-control" value="{{$data->link}}">
              </div>

              <div class="form-group col-xs-12 form-element">
                <label class="control-label">Status</label>
                <select class="form-control" name="status" id="menu-status">
                  <option value="1" <?php  if($data->status===1) echo "selected"?>>Active</option>
                  <option value="0" <?php  if($data->status===0) echo "selected"?>>Inactive</option>
                </select>
              </div>

              <div class="form-group col-xs-12 form-element">
                <label class="control-label">Color</label>
                <input type="color" value="{{ $data->color }}" type="text" name="color" id="menu-color" class="form-control jscolor" style="width: 200px;height: 50px">
              </div>

              <div class="form-group col-xs-12 form-element">
                <label class="control-label">Bold</label>
                <input type="checkbox" name="bold" id="menu-bold" value="{{ $data->bold }}" <?php if($data->bold===1) echo "checked"?>>
              </div>
              
              <div class="form-group col-xs-12 fileinput fileinput-new" id="fileinput" data-provides="fileinput">
                <div class="controls" >
                    <div class="fileinput-preview fileinput-exists thumbnail" style="width: 200px;height: 100px" id="menu-image" >
                      <div id="preview">
                          <img id='menu-img'  src="{{$data->image}}" alt="" style="width: 200px;height: 100px; line-height: 0px;">
                      </div>
                    </div>
                      <div>
                        <span class="btn btn-default btn-file">
                            <input type="file" name="image_file" id="menu-img">
                        </span>
                        <a href="#" class="btn btn-default fileinput-exists" id="remove_image" data-dismiss="fileinput">remove</a>
                      </div>
                </div>
            </div>

            <div class="form-group col-xs-12 form-element">
              <button type="submit" class="btn btn-success">update </button>
            </div>
        </form>

        </div>
      </div>
    </div>
    <script type="text/javascript" src="asset-menu/js/jquery.min.js"></script>
    <script type="text/javascript" src="asset-menu/js/bootstrap.min.js"></script>
  </body>
</html>
<script type="text/javascript"> //jvsc load img
    function readURL(input){
      if (input.files&&input.files[0]) {
        var reader=new FileReader();
        reader.onload=function(e){
          $('#preview img').attr('src',e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
      }
    }
    $(document).on('change','input[type="file"]',function(){
      readURL(this);
    })
      
</script>
