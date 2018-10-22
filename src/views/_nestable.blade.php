<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<ol class="dd-list">
    @foreach($data as $d)
        <li class="dd-item dd3-item" data-id="{{ $d->id }}">
        	<div class="dd-handle dd3-handle"></div>
            <div class="dd3-content" style='display:flex'>
                <span id='menu-{{$d->id}}' class="name">{{ $d->title }}</span>
                <div style="flex-grow: 1">
                @if(!$d->child->count())
                    <a href="{{ url('delete/'.$d->id) }}" onclick="return window.confirm('Bạn có chắc muốn xoá không?')" style="color:red; float: right" ><i class="fa fa-times"></i> </a>
                @endif
                <a href="javascript:void(0)" onclick="getitem({{$d->id}})" style="color:#FFCC66; float: right" ><i class="fa fa-pencil"></i> &nbsp&nbsp</a>
                </div>
            </div>

            @if($d->child->count())
                @include('menu::_nestable', ['data' => $d->child])
            @endif
        </li>
    @endforeach
</ol>

<script>
    
    function getitem(id){
        $.get("index/"+id, function(data, status){
            item=JSON.parse(data);
            document.getElementById('menu-id').value=item['id'];
            document.getElementById('menu-title').value=item['title'];
            document.getElementById('menu-link').value=item['link'];
            document.getElementById('menu-img').src=item['image'];
            document.getElementById('menu-image').value=item['image'];
            document.getElementById('menu-parent_id').value=item['parent_id'];
            document.getElementById('menu-position').value=item['position'];
            document.getElementById('menu-color').value=item['color'];
            document.getElementById('menu-bold').value=item['bold'];
            document.getElementById('menu-status').value=item['status'];
        });
        
    }
    
</script>
