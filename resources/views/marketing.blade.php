@extends('app')

@section('body-class')
home
@endsection

@section('content')

<nav id="slide-menu" class="slide-menu" role="navigation">

	<div class="brand">
		<a href="/">
			<img src="/assets/img/logo-greyscale-isolated.png" height="85">
		</a>
	</div>

	<ul class="slide-main-nav">
		@include('partials.main-nav')
	</ul>

</nav>

<section class="panel statement light" id="first-panel">
	<div class="content">

		<img src="/assets/img/jiro-logo-large.png" id="home-logo" alt="Jiro PHP e-commerce framework" />

		<p>The E-Commerce Framework for Web Artisans</p>

		</div>
	</div>
	<a href="#features" class="next-up">
		Find out more
		<img src="/assets/img/down-arrow.png">
	</a>
</section>

<section class="panel features dark" id="features">
	
	<h1>We are still in development</h1>
	<p>Jiro is in the very early stages of development, we need community participation and contributions. <strong>Lend us a hand</strong> and become part of something big whilst we are at ground zero.</p>
	<a href="https://github.com/Jiro-Commerce/Jiro/blob/master/readme.md" class="btn btn-circle">Get Involved &rarr;</a>

		<div class="blocks stacked">
			<div class="block odd">
				<div class="text">
					<h2>Modular, package based architecture.</h2>
					<p>Our paradigm is based around the principal that e-commerce requirements are very unique to each project and a modular approach gives developers the opportunity to build applications tailored to their needs.</p>
				</div>
				<div class="media">

					<img src="/assets/img/jiro-apps.png" alt="Packages" class="packages">

				</div>
			</div><!-- /.block -->
			<div class="block even">
				<div class="text">
					<h2>The future of e-commerce</h2>
					<p>We beieve there is a huge void in the PHP community for a viable e-commerce solution. Current offerings are based on legacy coding practices and give little room to develop important application components such as CMS and other functionality.</p>
				</div>
				<div class="media">
					
					<img src="/assets/img/mbp_retina.png" alt="Packages" class="e-commerce">

				</div>
			</div><!-- /.block -->
			<div class="block odd">
				<div class="text">
					<h2>Elegant and expressive code</h2>
					<p>Jiro is developed using a BDD methodology with clean architecture in the aim of achieving great flexibility. A capable solution that scales well for enterprise and small business alike.</p>
				</div>
				<div class="media">

					<img src="/assets/img/code.png" alt="Packages" class="code">

				</div>
			</div><!-- /.block -->
		</div>
		<a href="#ecosystem" class="next-up">
			Part of The Laravel Ecosystem
			<img src="/assets/img/down-arrow.png">
		</a>
	</section>

	<section class="panel ecosystem light" id="ecosystem">
		<h1>Part of The Laravel Ecosystem</h1>
		<p>Revolutionize how you build the web.</p>

		<div class="forge contain">
			<img src="/assets/img/forge-macbook.png" alt="Forge Dashboard" class="screenshot">
			<div class="content">
				<img src="/assets/img/forge-logo.png" alt="Forge">
				<p>Instant PHP Platforms On Linode, DigitalOcean, and more. Push to deploy, PHP 5.6, HHVM, queues, and everything you need to launch and deploy amazing Laravel applications.</p>
				<p>Launch your application in minutes!</p>
			</div>
		</div>
		<div class="tiles">
			<div class="tile">
				<h2>Homestead</h2>
				<p>The official Laravel local development environment. Powered by Vagrant, Homestead gets your entire team on the same page with the latest PHP, MySQL, Postgres, Redis, and more.</p>
			</div>
			<div class="tile">
				<h2>Laracasts</h2>
				<p>Hundreds (yes, hundreds) of Laravel and PHP video tutorials with new videos added every week! Skim the basics or start your journey to Laravel mastery. All for the price of lunch.</p>
			</div>
			<div class="tile">
				<h2>Power Packed</h2>
				<p>Laravel is amazing out of the box, but there's more to explore! Let <a href="/docs/billing">Cashier</a> makes subscription billing painless, or use <a href="/docs/authentication#social-authentication">Socialite</a> to authenticate with Facebook, Twitter, and more.</p>
			</div>
		</div>
	</section>
@endsection
