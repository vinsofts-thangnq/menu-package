<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Menu</title>
	<link href="asset-menu/build/css/bootstrap.min.css" rel="stylesheet">
	<link href="asset-menu/build/css/font-awesome.min.css" rel="stylesheet">
	<link href="asset-menu/build/css/datepicker3.css" rel="stylesheet">
	<link href="asset-menu/build/css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- CSS nettable -->
  <style type="text/css">

  .cf:after { visibility: hidden; display: block; font-size: 0; content: " "; clear: both; height: 0; }
  * html .cf { zoom: 1; }
  *:first-child+html .cf { zoom: 1; }

  html { margin: 0; padding: 0; }
  body { font-size: 100%; margin: 0; padding: 1.75em; font-family: 'Helvetica Neue', Arial, sans-serif; }

  h1 { font-size: 1.75em; margin: 0 0 0.6em 0; }

  a { color: #2996cc; }
  a:hover { text-decoration: none; }

  p { line-height: 1.5em; }
  .small { color: #666; font-size: 0.875em; }
  .large { font-size: 1.25em; }

  /**
  * Nestable
  */

  .dd { position: relative; display: block; margin: 0; padding: 0; max-width: 600px; list-style: none; font-size: 13px; line-height: 20px; }

  .dd-list { display: block; position: relative; margin: 0; padding: 0; list-style: none; }
  .dd-list .dd-list { padding-left: 30px; }
  .dd-collapsed .dd-list { display: none; }

  .dd-item,
  .dd-empty,
  .dd-placeholder { display: block; position: relative; margin: 0; padding: 0; min-height: 20px; font-size: 13px; line-height: 20px; }

  .dd-handle { display: block; height: 30px; margin: 5px 0; padding: 5px 10px; color: #333; text-decoration: none; font-weight: bold; border: 1px solid #ccc;
      background: #fafafa;
      background: -webkit-linear-gradient(top, #fafafa 0%, #eee 100%);
      background:    -moz-linear-gradient(top, #fafafa 0%, #eee 100%);
      background:         linear-gradient(top, #fafafa 0%, #eee 100%);
      -webkit-border-radius: 3px;
              border-radius: 3px;
      box-sizing: border-box; -moz-box-sizing: border-box;
  }
  .dd-handle:hover { color: #2ea8e5; background: #fff; }

  .dd-item > button { display: block; position: relative; cursor: pointer; float: left; width: 25px; height: 20px; margin: 5px 0; padding: 0; text-indent: 100%; white-space: nowrap; overflow: hidden; border: 0; background: transparent; font-size: 12px; line-height: 1; text-align: center; font-weight: bold; }
  .dd-item > button:before { content: '+'; display: block; position: absolute; width: 100%; text-align: center; text-indent: 0; }
  .dd-item > button[data-action="collapse"]:before { content: '-'; }

  .dd-placeholder,
  .dd-empty { margin: 5px 0; padding: 0; min-height: 30px; background: #f2fbff; border: 1px dashed #b6bcbf; box-sizing: border-box; -moz-box-sizing: border-box; }
  .dd-empty { border: 1px dashed #bbb; min-height: 100px; background-color: #e5e5e5;
      background-image: -webkit-linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff),
                      -webkit-linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff);
      background-image:    -moz-linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff),
                          -moz-linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff);
      background-image:         linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff),
                              linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff);
      background-size: 60px 60px;
      background-position: 0 0, 30px 30px;
  }

  .dd-dragel { position: absolute; pointer-events: none; z-index: 9999; }
  .dd-dragel > .dd-item .dd-handle { margin-top: 0; }
  .dd-dragel .dd-handle {
      -webkit-box-shadow: 2px 4px 6px 0 rgba(0,0,0,.1);
              box-shadow: 2px 4px 6px 0 rgba(0,0,0,.1);
  }

  /**
  * Nestable Extras
  */

  .nestable-lists { display: block; clear: both; padding: 30px 0; width: 100%; border: 0; border-top: 2px solid #ddd; border-bottom: 2px solid #ddd; }

  #nestable-menu { padding: 0; margin: 20px 0; }

  #nestable-output,
  #nestable2-output { width: 100%; height: 7em; font-size: 0.75em; line-height: 1.333333em; font-family: Consolas, monospace; padding: 5px; box-sizing: border-box; -moz-box-sizing: border-box; }

  #nestable2 .dd-handle {
      color: #fff;
      border: 1px solid #999;
      background: #bbb;
      background: -webkit-linear-gradient(top, #bbb 0%, #999 100%);
      background:    -moz-linear-gradient(top, #bbb 0%, #999 100%);
      background:         linear-gradient(top, #bbb 0%, #999 100%);
  }
  #nestable2 .dd-handle:hover { background: #bbb; }
  #nestable2 .dd-item > button:before { color: #fff; }

  @media only screen and (min-width: 700px) {

      .dd {  }
      .dd + .dd { margin-left: 2%; }

  }

  .dd-hover > .dd-handle { background: #2ea8e5 !important; }

  /**
  * Nestable Draggable Handles
  */

  .dd3-content { display: block; height: 30px; margin: 5px 0; padding: 5px 10px 5px 40px; color: #333; text-decoration: none; font-weight: bold; border: 1px solid #ccc;
      background: #fafafa;
      background: -webkit-linear-gradient(top, #fafafa 0%, #eee 100%);
      background:    -moz-linear-gradient(top, #fafafa 0%, #eee 100%);
      background:         linear-gradient(top, #fafafa 0%, #eee 100%);
      -webkit-border-radius: 3px;
              border-radius: 3px;
      box-sizing: border-box; -moz-box-sizing: border-box;
  }
  .dd3-content:hover { color: #2ea8e5; background: #fff; }

  .dd-dragel > .dd3-item > .dd3-content { margin: 0; }

  .dd3-item > button { margin-left: 30px; }

  .dd3-handle { position: absolute; margin: 0; left: 0; top: 0; cursor: pointer; width: 30px; text-indent: 100%; white-space: nowrap; overflow: hidden;
      border: 1px solid #aaa;
      background: #ddd;
      background: -webkit-linear-gradient(top, #ddd 0%, #bbb 100%);
      background:    -moz-linear-gradient(top, #ddd 0%, #bbb 100%);
      background:         linear-gradient(top, #ddd 0%, #bbb 100%);
      border-top-right-radius: 0;
      border-bottom-right-radius: 0;
  }
  .dd3-handle:before { content: '≡'; display: block; position: absolute; left: 0; top: 3px; width: 100%; text-align: center; text-indent: 0; color: #fff; font-size: 20px; font-weight: normal; }
  .dd3-handle:hover { background: #ddd; }

  /**
  * Socialite
  */

  .socialite { display: block; float: left; height: 35px; }

  </style>
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
        <span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Menu</span>Admin</a>
				
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Username</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="http://127.0.0.1:8000/index">&nbsp; Menu</a></li>
			</li>
			<li><a href="login.html"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
  
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12" id="nestable-menu">
        <h1 class="page-header"></h1>
        <h1>Menu</h1>
        <a type="button" href="javascript:void(0)" id="expand-all" onclick='expand()' class="btn btn-warning">Expand all</a>
        <a type="button" href="javascript:void(0)" id="collapse-all" onclick='expand()' class="btn btn-danger">Collapse all</a>
        <a type="button" href="index" class="btn btn-info">New</a>
			</div>
      
		<!-- netblade -->
    <div class="col-md-6">
			<div class="cf nestable-lists">
				<div class="dd" id="nestable-menu">
          @include('menu::_nestable')
				</div>
      </div>
    </div>  

    <!-- COT PHAI? -->
    <div class="col-md-6">
      <label class="control-label title-label" id="form-title"></label>
      <div class="clear"></div>
        <form class="form-horizontal" role="form" method="post" action="{{ url('create') }}" id="form" enctype="multipart/form-data">

              <input type="hidden" name="_method" id="menu-method" value="post">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="hidden" name="parent_id" id="menu-parent_id" value="0">
              <input type="hidden" name="position" id="menu-position" value="0">
              <input id='menu-id' style="display:none" value="111">

              <div class="form-group col-xs-12 form-element">
                <label class="control-label required" style="font-size: 130%;">Title</label>&nbsp<label style="color:red;font-size: 130%;">*</label>
                <input type="text" name="title" id="menu-title" class="form-control" required>
              </div>

              <div class="form-group col-xs-12 form-element">
                <label class="control-label" style="font-size: 130%;">Link</label>
                <input type="text" name="link" id="menu-link" class="form-control" required>
              </div>

              <div class="form-group col-xs-12 form-element">
                <label class="control-label" style="font-size: 130%;">Status</label>
                <select class="form-control" name="status" id="menu-status">
                  <option value="1">Active</option>
                  <option value="0">Inactive</option>
                </select>
              </div>

              <div class="form-group col-xs-12 form-element">
                <label class="control-label" style="font-size: 130%;">Color</label>
                <input name="color" id="menu-color" class="form-control jscolor">
                
              </div>

              <div class="form-group col-xs-12 form-element">
                <label class="control-label" style="font-size: 130%;">Bold</label>
                <input type="checkbox" name="bold" id="menu-bold" value="1">
              </div>
              
              <div class="form-group col-xs-12 fileinput fileinput-new" id="fileinput" data-provides="fileinput">
                <div class="controls" >
                    <div class="fileinput-preview fileinput-exists" style="" id="menu-image" >
                      <div id="preview">
                          <img id="menu-img" src="/uploads/images/image.png" alt="" style="width: 200px;height: 100px; line-height: 0px;">
                      </div>
                    </div>
                      <div>
                        <span class="btn btn-default btn-file">
                            <input type="file" name="image_file" id="file" required>
                        </span>
                        <a href="#" class="btn btn-default fileinput-exists" onclick="remove()" id="remove_image" data-dismiss="fileinput">remove</a>
                      </div>
                </div>
            </div>

            <div class="form-group col-xs-12 form-element">
              <button  type="submit" class="btn btn-success"><a href="javascript:void(0)" onclick="alertt()"></a>Insert </button>
            </div>
        </form>
        <button class="btn btn-success" onclick="updateItem()"></a>Update </button>
      </div>
    </div>  
		
</div>	<!--/.main-->
	

	<!-- scrip nettable -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="/asset-menu/js/jquery.nestable.js"></script>
<script src="/asset-menu/js/jscolor.js"></script>

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

<script>
  function expand() {
    $('#nestable-menu').on('click', function(e)
      {
        var target = e.target,
            action = target.id;
        if (action === 'expand-all') {
            $('.dd').nestable('expandAll');
        }
        if (action === 'collapse-all') {
            $('.dd').nestable('collapseAll');
        }
      });
    } 
</script>

<script>
  $(document).ready(function()
    {

      $('.dd').nestable().on('change', function() {
        $.ajax({
        url : '{{ url('update-menu') }}',
        type: 'POST',
        data: {
            data: $('.dd').nestable('serialize'),
            _token: '{{ csrf_token() }}'
        },
        success: function(data) {
            // window.location.reload();
        }
        });
      });

      var updateOutput = function(e)
      {
          var list   = e.length ? e : $(e.target),
              output = list.data('output');
          if (window.JSON) {
              output.val(window.JSON.stringify(list.nestable('serialize')));//, null, 2));
          } else {
              output.val('JSON browser support required for this demo.');
          }
      };

      

      // activate Nestable for list 1
      $('#nestable').nestable({
          group: 1
      })
      .on('change', updateOutput);

      // output initial serialised data
      updateOutput($('#nestable').data('output', $('#nestable-output')));

      $('#nestable-menu').on('click', function(e)
      {
          var target = $(e.target),
              action = target.data('action');
          if (action === 'expand-all') {
              $('.dd').nestable('expandAll');
          }
          if (action === 'collapse-all') {
              $('.dd').nestable('collapseAll');
          }
      });
    });

  @section('scripts')
    // <!--script for this page only-->
    <script src="{{ url('js/jquery.nestable.js') }}"></script>
    <script>

      $('form').on('change.bs.fileinput', '.fileinput', function() {
          $('#menu-image').val(null);
      }).on('clear.bs.fileinput', '.fileinput', function() {
          $('#menu-image').val(null);
      });

      $('#add').click(function() {
        $('#form-title').html('{{ __('menu.new') }}');
        $('#menu-title').val('');
        $('#menu-link').val('');
        document.getElementById('menu-color').jscolor.fromString('00000');
        $('#menu-bold').iCheck('uncheck');
        $('#menu-method').val('POST');
        $('#form').attr('action', '{{ url('menu') }}');
        $('#remove_image').trigger('click');
      });

      
      $('body').on('click', '.edit', function() {
        var url = '{{ url('menu') }}/' + $(this).data('id');
        $.ajax({
        url : url,
        type: 'GET',
        success: function(data) {
            $('#form-title').html('{{ __('menu.edit') }} "'+data.title+'"');
            $('#menu-title').val(data.title);
            $('#menu-link').val(data.link);
            $('#menu-status').val(data.status);
            if (data.image) {
              $('.fileinput-preview').html('<img src="{{ url('uploads/menu') }}/'+data.image+'">');
              $('#fileinput').removeClass('fileinput-new').addClass('fileinput-exists');
            } else {
              $('#remove_image').trigger('click');
            }
            $('#menu-image').val(data.image);
            $('#menu-parent').val(data.parent_id);
            $('#menu-position').val(data.position);
            document.getElementById('menu-color').jscolor.fromString('#'+data.color);
            if (data.bold == 1) {
              $('#menu-bold').iCheck('check');
            } else {
              $('#menu-bold').iCheck('uncheck');
            }
            $('#menu-method').val('PUT');
            $('#form').attr('action', url);
          }
        });
      });

      $('#expand-all').click(function() {
        $('.dd').nestable('expandAll');
      });

      $('#collapse-all').click(function() {
        $('.dd').nestable('collapseAll');
      });

      $(document).ready(function(){
        $('.check').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
        });
      });
    </script>
  @endsection
</script>


<script>
    function updateItem(){
        var file_data = $('#file').prop('files')[0];
        var form_data = new FormData();
        form_data.append(file.name, file_data);
        item={
          id: document.getElementById("menu-id").value,
          title: document.getElementById("menu-title").value,
          link: document.getElementById("menu-link").value,
          image_file: form_data,
          parent_id: document.getElementById("menu-parent_id").value,
          position: document.getElementById("menu-position").value,
          color: document.getElementById("menu-color").value,
          bold: document.getElementById("menu-bold").value,
          status: document.getElementById("menu-status").value
        };
        $.ajax({
          processData: false,
          contentType: false,
          url: '/update/'+document.getElementById("menu-id").value,
          type: 'POST',
          data:new FormData($("#form_data")[0]),
          success: function(res) {
            alert('cap nhat thanh cong');
          }
        });
    }

</script>
</body>
</html>