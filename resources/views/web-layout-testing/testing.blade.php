<html>
<head>
	<meta charset="UTF-8">
	<title>Testing 1</title>
	<link href="{{ asset('css/branch_io.css') }}" rel="stylesheet">
</head>
<body>


{{-- navigation bar --}}

<section>

  <div class="line-height">
  
    <ul class="navigation_left_bar navigation_bar_background_color pull-lefts padding-left-right padding-top-bottom">
      <li>Summary</li>
      <li>lalala</li>
      <li>lalala</li>
      <li>lalala</li>
      <li>lalala</li>
      <li>lalala</li>
      <li>lalala</li>
      <li>lalala</li>
    </ul>

  </div>

</section>


{{-- Header --}}

<section>

  <nav class="flex-align-content-stick-top flex-justify-content-between padding-top-bottom body-content-width">

  	<div class="line-height responsive-nav"> 

  		<div class="pull-lefts font-weight-bold mt-0-5em">Desktop SMS</div>

      <div class="flex-row pull-rights">
    		<button class="order-1 button-tiffany mr-1-3em pl-8px">Create Link</button>
    		<div class="order-2 pr-1-2em mt-0-5em">?</div>
    		<div class="order-3 font-weight-bold pr-1-2em mt-0-5em">Sign Out</div>
      </div>

  	</div>

  </nav>

</section>


{{-- content --}}

<section>


{{-- body content (left) --}}

  <div class="body-content-width body-content-height flex-justify-content-between">

    <div id="setup-max-width" class="pull-lefts flex-align-self-start margin-left-right">

  		<div class="header-background-color font-weight-bold line-height">Setup</div>

      <div class="padding-left-right padding-top-bottom">

  			<div class="flex-justify-content-between line-height">

  				<div class="font-weight-bold">Desktop SMS</div>
  				<div>off on</div>

  			</div>

        <div>

          <div>
      			<input type="radio" id="example1"> 
            <label for="example1" class="line-height">Branch-hosted SMS Landing Page</label>
          </div>

          <div>
  			    <input type="radio" id="example2">
            <label for="example2" class="line-height">Deepviews Content Previews with SMS</label>
          </div>

          <div>

  			    <input type="radio" id="example3">
            <label for="example3" class="line-height">Custom Landing Page with SMS</label>

          </div>

        </div>

  		</div>

  		<div class="mt-20px">

  			<div class="font-weight-bold line-height">Select Deepviews template:</div>

  			<div class="line-height">

  				<select class="w-50">
  					<option>Timev - buy &amp; sell local service development</option>
  				</select>

  			</div>

  			<div class="font-weight-bold line-height">Customize the SMS your users will receive:</div>

        <div class="line-height">
  			  <input type="text" class="w-90" value="Click here to download Timev - Buy & Sell Local Service link" required>
        </div>

  			<div class="line-height">Use link as a placeholder for the link in the SMS. <a>See the docs</a> for more placeholders. </div>
  			<div class="mt-50px"></div>
  			<div class="line-height">Your desktop redirects will also be updated in <a> Link Settings</a></div>

  			<div class="pull-rights">
  				<button class="button-tiffany">Save</button>
  			</div>

  		</div>

  	</div>


    {{-- body content (right) --}}

  	<div id="example-max-width" class="pull-lefts padding-left-right padding-top-bottom flex-align-self-end margin-left-right">

  		<div class="flex-justify-content-start header-background-color"> 
  			<div class="pull-lefts font-weight-bold line-height">Example</div>
      </div>

      <a class="flex-justify-content-end"> 
  			<p class="pull-rights">Configure Template</p>
      </a>

  		<div class="flex-justify-content-between">

  			<div class="pull-lefts">
  				<img src="https://is3-ssl.mzstatic.com/image/thumb/Purple122/v4/84/97/53/84975389-cdfb-1219-1fe6-ca1a55337a1b/source/512x512bb.jpg" height="300" width="250">
  			</div>

  			<div id="border-2px" class="padding-left-right">

  				<div class="font-weight-bold mt-10px fa-0-7em">YOUR APP NAME</div>
  				<h1 class="fa-1-5em">Title for your app card content here</h1>
  				<p>Description of the content of the card here and if the information is too long cut it at five lines..<a>more</a></p>
  				<div class="mt-10px"></div>

  				<div>
            <p class="fa-0-7em mt-3-7em">Enter your phone number to download apps</p>
  					<input type="text" class="pull-lefts" required>
  					<button id="button-for-send">Send</button>
  				</div>

  			</div>

  		</div>

      <div class="line-height">
    		<div class="font-weight-bold line-height fa-1-0em">Test link:</div>
    		<a>https://timev.co</a>
      </div>

  	</div>

  </div>

</section>

{{-- end of content --}}


</body>
</html>