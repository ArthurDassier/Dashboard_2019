<div class="card card-stats">
  <div class="card-header card-header-danger card-header-icon">
    <div class="card-icon">
        <i class="material-icons">local_see</i>
    </div>
    <p class="card-category">Instagram</p>
    <h3 class="card-title">
        <p>{{$info_insta['profil_name']}}</p>
        <img src="{{$info_insta['profil_image']}}">
        <br>
        <small>{{$info_insta['profil_bio']}}</small>
    </h3>
    <font color="black">posts : {{$info_insta['profil_media']}} | follows : {{$info_insta['profil_follows']}} | followed_by : {{$info_insta['profil_followed_by']}}</font> 
  </div>
  <div class="card-footer">
    Most recent post :
    <img src="{{$info_post['recent_post_image']}}">
    <br>
    {{$info_post['recent_post_name']}}
    <br>
    likes: {{$info_post['recent_post_like']}}
  </div>
</div>


