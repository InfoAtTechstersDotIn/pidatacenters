@extends('backend.layout')
@section('content')
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script>
  tinymce.init({
    selector: 'textarea#editor',
    menubar: false
  });
</script>
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                        @if($errors)
                            @foreach($errors->all() as $error)
                            <p class="text-danger">{{$error}}</p>
                            @endforeach
                        @endif

                        @if(Session::has('success'))
                        <p class="text-success">{{session('success')}}</p>
                        @endif
                        <form action="{{url('post')}}" method="POST" enctype="multipart/form-data">
    		                @csrf
                            <div class="form-group">
                                <label for="title">Title <span class="require">*</span></label>
                                <input type="text" class="form-control" name="title" required/>
                            </div>

                            <div class="form-group" style="width:300px">
                                <label for="customDate">Custom Date <span class="require">*</span></label>
                                <input type="date" class="form-control" name="customDate" id="date" onload="getDate()" required/>
                            </div>

                            <div class="form-group"> 
                                <label for="sel1">Select Page Category:<span class="require">*</span></label>
                                <select class="form-control" name="cat_id" id="cat_page" required>
                                <option value="-1"> -- Select Category  --</option>

                                @foreach($cat_data as $cat)
                                    <option value="{{$cat->id}}">{{$cat->title}}</option>
                                @endforeach    
                                </select>
                            </div>
                            
                            

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea rows="5" id="editor" class="form-control" name="description" required></textarea>
                            </div>


                            <div class="form-group">
                                <label class="form-label" for="customFile">feature Image <span> (Size should be in 759 * 429 px)</span></label>
                                <input type="file"  name="post_thumb" class="form-control" id="customFile"  required/>
                            </div>


                            <div class="form-group">
                                <label class="form-label" id="mainImgLabel" for="customFile">Choose Main Image <span> (Size should be in 759 * 429 px)</span></label>
                                <input type="file" name="post_image" class="form-control" id="customFile" required />
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="customFile">Status</label><br>
                                <label class="radio-inline">
                                    <input type="radio" name="status" value="1" checked>Active
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="status" value="0">In Active
                                </label>
                            </div>

                            <div class="form-group">
                                <label for="title">Meta Title <span class="require">*</span></label>
                                <input type="text" class="form-control" name="metaTitle" required/>
                            </div>

                            <div class="form-group">
                                <label for="title">Meta Description <span class="require">*</span></label>
                                <input type="text"  class="form-control" name="metaDesc" required/>
                            </div>

                            <div class="form-group">
                                <label for="title">Meta Keywords (Seperate Keyword with commas) <span class="require">*</span></label>
                                <input type="text" class="form-control" name="keywords" required/>
                            </div>
                            
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    Create
                                </button>
                                <button class="btn btn-default">
                                    Cancel
                                </button>
                            </div>
                            
                        </form>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

                <script>
                    var cat_id = document.querySelector('#cat_page');
                    var mainImgLabel = document.querySelector("#mainImgLabel");
                    //var main_pdf = document.querySelector("#pdfResult");

                    cat_id.addEventListener('change', (event) => {
                        //alert(cat_id.value);
                        if(cat_id.value == '3'){
                            //main_pdf.style.display = "none";
                            mainImgLabel.innerText = "Choose PDF"
                        }else{
                            //main_pdf.style.display = "block";
                            mainImgLabel.innerText = "Choose Main Image";
                        }
                    });


                    // setting today in Custom date field
                        //alert(teste);
                        var today = new Date();
                        document.getElementById("date").value = today.getFullYear() + '-' + ('0' + (today.getMonth() + 1)).slice(-2) + '-' + ('0' + today.getDate()).slice(-2);
                      // document.getElementById("date").value = ('0' + (today.getMonth() + 1)).slice(-2) + '/' +  ('0' + today.getDate()).slice(-2) + '/' + today.getFullYear() ;
                       // alert(teste);
                               
                </script>

@endsection