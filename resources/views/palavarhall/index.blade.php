@extends('main')

<?php $titleTag = htmlspecialchars($tale->title); ?>

@section('title', "| $titleTag")

@section('content')

<div class="page-breadcrumbs">
	<div class="entry-thumbnail">
            <img class="banner-1884" src="/images/1884-gallery/1884-banners-bg.jpg" alt="" />
        </div>
        <div class="clear-top">
        </div>
	
	<h1 class="section-title">Welcome to Palaver Hall. Join the dicussion on {!! $tale->title !!} </h1>

</div>
<div class="section">

	<div class="row">
		<div class="col-sm-12">		

			<div class="comments-box">
				<p class="blue-alert">NOTE***: If you are just joining Palaver Hall Discussion for the very first time, you are required to verify your account/Identity through an email that will be sent to your prefered email account. Please click on the link that says "send email to..."<br/> <span class="red-alert">Kindly check your <span class="bold-alert">SPAM BOX</span> if the verification email is not in your <span class="bold-alert">PRIMARY INBOX</span></span></p>


				<div id="disqus_thread"></div>
				<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
*/
var disqus_config = function () {
	var disqus_identifier = {!! $tale->slug !!};
	this.page.url = 'http://www.yunhouse.co.uk/comments';  
// Replac PAGE_URL with your page's canonical URL variable
this.page.identifier = disqus_identifier; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};

(function() { // DON'T EDIT BELOW THIS LINE
	var d = document, s = d.createElement('script');
	s.src = 'https://yunhouse.disqus.com/embed.js';
	s.setAttribute('data-timestamp', +new Date());
	(d.head || d.body).appendChild(s);
})();
</script>
<noscript><a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>


</div>
</div>
</div>

@endsection