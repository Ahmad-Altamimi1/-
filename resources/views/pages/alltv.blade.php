
@extends('../layouts.pagesLayouts.Master')
    @section('content')
<style>
    @import url("https://fonts.googleapis.com/css?family=DM+Sans:400,500,700&display=swap");

* {
  box-sizing: border-box;
}


body {


  &.blue {
    background-color: #428aa6;
  }
}

input[type=radio] {
  display: none;
}

.card {
  position: absolute;
  width: 60%;
  height: 100%;
  left: 0;
  right: 0;
  margin: auto;
  transition: transform .4s ease;
  cursor: pointer;
}

.containers {
  width: 100%;
  max-width: 800px;
  max-height: 600px;
  height: 100%;
  transform-style: preserve-3d;
  display: flex;
  margin:0 auto;
  justify-content: center;
  flex-direction: column;
  align-items: center;
}

.cards {
  position: relative;
  width: 100%;
  height: 100%;
  margin-bottom: 20px;
}

img {
  width: 100%;
  height: 100%;
  border-radius: 10px;
  object-fit: cover;
}

#item-1:checked ~ .cards #song-3, #item-2:checked ~ .cards #song-1, #item-3:checked ~ .cards #song-2 {
  transform: translatex(-40%) scale(.8);
  opacity: .4;
  z-index: 0;
}

#item-1:checked ~ .cards #song-2, #item-2:checked ~ .cards #song-3, #item-3:checked ~ .cards #song-1 {
  transform: translatex(40%) scale(.8);
  opacity: .4;
  z-index: 0;
}

#item-1:checked ~ .cards #song-1, #item-2:checked ~ .cards #song-2, #item-3:checked ~ .cards #song-3 {
  transform: translatex(0) scale(1);
  opacity: 1;
  z-index: 1;

  img {
    box-shadow: 0px 0px 5px 0px rgba(81, 81, 81, 0.47);
  }
}

.player {
  background-color: #fff;
  border-radius: 8px;
  min-width: 320px;
  padding: 16px 10px;
}

.upper-part {
  position: relative;
  display: flex;
  align-items: center;
  margin-bottom: 12px;
  height: 36px;
  overflow: hidden;
}

.play-icon{ margin-right: 10px; }

.song-info {
  width: calc(100% - 32px);
  display: block;
}

.song-info .title {
  color: #403d40;
  font-size: 14px;
  line-height: 24px;
}

.sub-line {
  display: flex;
  justify-content: space-between;
  width: 100%;
}

.subtitle, .time {
  font-size: 12px;
  line-height: 16px;
  color: #c6c5c6;
}

.time {
  font-size: 12px;
  line-height: 16px;
  color: #a5a5a5;
  font-weight: 500;
  margin-left: auto;
}

.progress-bar {
  height: 3px;
  width: 100%;
  background-color: #e9efff;
  border-radius: 2px;
  overflow: hidden;
}

.progress {
  display: block;
  position: relative;
  width: 60%;
  height: 100%;
  background-color: #2992dc;
  border-radius: 6px;
}

.info-area {
  width: 100%;
  position: absolute;
  top: 0;
  left: 30px;
  transition: transform .4s ease-in;
}

#item-2:checked ~ .player #test {
  transform: translateY(0);
}

#item-2:checked ~ .player #test  {
  transform: translateY(-40px);
}

#item-3:checked ~ .player #test  {
  transform: translateY(-80px);
}
article {
  --img-scale: 1.001;
  --title-color: black;
  --link-icon-translate: -20px;
  --link-icon-opacity: 0;
  position: relative;
  border-radius: 16px;
  box-shadow: none;
  background: #fff;
  transform-origin: center;
  transition: all 0.4s ease-in-out;
  overflow: hidden;
  border: 1px solid #ada6a6;

}

article a::after {
  position: absolute;
  inset-block: 0;
  inset-inline: 0;
  cursor: pointer;
  content: "";
}

/* basic article elements styling */
article h2 {
  margin: 0 0 18px 0;
  font-family: "Bebas Neue", cursive;
  font-size: 1.9rem;
  letter-spacing: 0.06em;
  color: var(--title-color);
  transition: color 0.3s ease-out;
}

figure {
  margin: 0;
  padding: 0;
  aspect-ratio: 16 / 9;
  overflow: hidden;
}

article img {
  max-width: 100%;
  transform-origin: center;
  transform: scale(var(--img-scale));
  transition: transform 0.4s ease-in-out;
}

.article-body {
  padding: 24px;
}

article a {
  display: inline-flex;
  align-items: center;
  text-decoration: none;
  color: #28666e;
}

article a:focus {
  outline: 1px dotted #28666e;
}

article a .icon {
  min-width: 24px;
  width: 24px;
  height: 24px;
  margin-left: 5px;
  transform: translateX(var(--link-icon-translate));
  opacity: var(--link-icon-opacity);
  transition: all 0.3s;
}

/* using the has() relational pseudo selector to update our custom properties */
article:has(:hover, :focus) {
  --img-scale: 1.1;
  --title-color: #28666e;
  --link-icon-translate: 0;
  --link-icon-opacity: 1;
  box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
}


/************************
Generic layout (demo looks)
**************************/

*,
*::before,
*::after {
  box-sizing: border-box;
}

body {
  margin: 0;
  padding: 48px 0;
  min-height: 100vh;
}

.articles {
  display: grid;
  max-width: 1200px;
  margin-inline: auto;
  padding-inline: 24px;
  grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
  gap: 24px;
}

@media screen and (max-width: 960px) {
  article {
    container: card/inline-size;
  }
  .article-body p {
    display: none;
  }
}

@container card (min-width: 380px) {
  .article-wrapper {
    display: grid;
    grid-template-columns: 100px 1fr;
    gap: 16px;
  }
  .article-body {
    padding-left: 0;
  }
  figure {
    width: 100%;
    height: 100%;
    overflow: hidden;
  }
  figure img {
    height: 100%;
    aspect-ratio: 1;
    object-fit: cover;
  }
}

.sr-only:not(:focus):not(:active) {
  clip: rect(0 0 0 0);
  clip-path: inset(50%);
  height: 1px;
  overflow: hidden;
  position: absolute;
  white-space: nowrap;
  width: 1px;
}

</style>
<h1 style="text-align:center;margin-bottom:30px">جميع الفيديوهات</h1>
<div class="containers">
  <?php foreach ($lastvideos as $key => $video): ?>
    <input type="radio" name="slider" id="item-<?php echo $key + 1; ?>" <?php echo $key === 0 ? 'checked' : ''; ?>>
  <?php endforeach; ?>

  <div class="cards">
    @foreach ($lastvideos as $key => $video)
      <label class="card" for="item-<?php echo $key + 1; ?>" id="song-<?php echo $key + 1; ?>">
        <img src="{{ asset('../' . $video->IMG) }} " alt="<?php echo $video['TITLE']; ?>">

      </label>


    @endforeach
  </div>

  <div class="player">
    <div class="upper-part">
      <div class="play-icon">
        <svg width="20" height="20" fill="#2992dc" stroke="#2992dc" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-play" viewBox="0 0 24 24">
          <defs/>
          <path d="M5 3l14 9-14 9V3z"/>
        </svg>
      </div>
      <div class="info-area" id="test">
        <?php foreach ($lastvideos as $key => $video): ?>
          <label class="song-info" id="song-info-<?php echo $key + 1; ?>">
      <a href="TV/{{$video->id}}">
            <div class="title"><?php echo $video['TITLE']; ?></div>
        </a>
            <div class="sub-line">
              <div class="subtitle"><?php echo $video['DESCRIPTION']; ?></div>
              <div class="time"><?php echo $video['DATE']; ?></div>
            </div>
          </label>
        <?php endforeach; ?>
      </div>
    </div>

  </div>
</div>
<section class="articles">
    @foreach($videos as $video)
    <article>
      <a href="TV/{{$video->id}}"></a>
    <div class="article-wrapper">
      <figure>
        <img src="{{asset($video->IMG)}}" alt="" />
      </figure>
      <div class="article-body">
        <h2>{{$video->TITLE}}</h2>
        <p>
            {{$video->DESCRIPTION}}
        </p>

      </div>
    </div>
</a>
  </article>
@endforeach
</section>
@endsection
<script>
    $('input').on('change', function() {
  $('body').toggleClass('blue');
});

</script>
