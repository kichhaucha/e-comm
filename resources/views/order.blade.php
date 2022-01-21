@extends('master')
@section('content')

   <div class="container ">
    <table class="table">
    
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>price</td>
            <td>{{$user}} k</td>
          
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>tax</td>
            <td>0 rupees</td>
          </tr>

          <tr>
            <th scope="row">3</th>
            <td>delevery charge</td>
            <td>100 rupees</td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>total amount</td>
            <td>{{$user+100}}k</td>
          </tr>
         
        </tbody>
      </table>


      <form  action="/orderplace" method="POST" >
      @csrf
        <div class="mb-3 ">
     
            <textarea  id="address" name="address" rows="3" cols="50" placeholder="Enter your address"  >
           
                </textarea>
        </div>

        
        <div class="mb-3 ">
     
          <label  for="" >payment method</label>
        <p><input type="radio" value="online" name="payment" > <span>online</span></p>
        <p><input type="radio" value="emi" name="payment" > <span>EMI pay</span></p>
        <p><input type="radio" value="cash" name="payment" > <span>Cash On Delevery</span></p>
        
        
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
      

      </form>


  @endsection


 

  
