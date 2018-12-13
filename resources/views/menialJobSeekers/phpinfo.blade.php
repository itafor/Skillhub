<div class="col-md-12">

<div class="card" style="width: 18rem;">
<h5 class="card-header main-color-bg" style="color: #fff;">Applicant Requested</h5>

  <img class="card-img-top" src="/upload/{{$users->photo}}" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">
    {{$users->about}}
    </p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><h2> {{$users->name}}</h2></li>
    <li class="list-group-item"><i class="fa fa-intersex"></i>  {{$users->sex}}</li>
    <li class="list-group-item"><i class="fa fa-phone"></i>  {{$users->phone}}</li>
    <li class="list-group-item"><i class="fa fa-envelope"></i>  {{$users->email}}</li>
    <li class="list-group-item"><i class="fa fa-map-marker"></i>  {{$users->state}}</li>
  </ul>
  <div class="card-body">
    @foreach ($users->imageproofs as $image)
<a href="/checkimageproof/{{$image->user_id == '' ? '' : $image->user_id}}" target="_blank">
 {{$image->user_id == '' ? '' : 'Picture Proof'}}</a></span><br>
  @endforeach

    @foreach ($users->videos as $video)
<a href="/checkvideoproof/{{$video->user_id == '' ? '' : $video->user_id}}" target="_blank">
 {{$video->user_id == '' ? '' : 'Video Proof'}}</a></span><br>
  @endforeach

  @foreach ($users->onlineproofs as $online)
<a href="/checkonlineproof/{{$online->user_id == '' ? '' : $online->user_id}}" target="_blank">
 {{$online->user_id == '' ? '' : 'Website URL'}}</a></span><br>
  @endforeach
  </div>
</div>
        
      </div>