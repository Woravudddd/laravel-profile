@extends('layout.mainlayout')

@section('content')

      
                 
                    <h1 > Create Item </h1>
                   
                    <form action="" method="post">
                    <div class="row mt-3"> 
                      
                    <div class="col-md-4  mt-3">
                       <label for="itemCode" class="form-label">item code</label>
                       <input type="text" class="form-control" id="itemCode" name="itemCode"> 
                    </div>
                    <div class="col-md-4  mt-3"> 
                       <label for="itemName" class="form-label">item name</label>
                       <input type="text" class="form-control" id="itemName" name="itemName"> 
                    </div>
                    </div>
        
                    <div class="row">
                    <div class="col-md-4 mt-3"> 
                       <label for="price" class="form-label">price</label>
                       <input type="text" class="form-control" id="price" name="price" require /> 
                    </div>
                    
                
                 
                       <input type="hidden" class="form-control" id="status" name="status" value="1"  > 
          
                    </div>
                    <div  class="col-md-6 mt-3" >
                    <label for="remark" class="form-label">remark</label>
                    <textarea rows="3"    class="form-control" id="remark" name="remark" ></textarea>
                    </div>

                    <button class="btn btn-blog btn-outline-success mt-3 " type="submit" id="submit" name="submit">บันทึก</button>
                    </form>
                    
                    
                 
              
       
@endsection