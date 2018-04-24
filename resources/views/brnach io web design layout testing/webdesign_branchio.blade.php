<html>
<head>
	<meta charset="UTF-8">
	<title>Branch IO</title>
	<link href="{{ asset('css/branch_io.css') }}" rel="stylesheet">
</head>
<body>

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



<section>
  <nav class="flex-align-content-stick-top flex-justify-content-between padding-top-bottom body-content-width">
  	<div class="line-height" style="padding-left: 20px; margin-left: 10px; border: 1px solid #ccc!important; width: 100%;"> 
  		<div class="pull-lefts font-weight-bold" style="margin-top: 0.5em;">Desktop SMS</div>
      <div class="flex-row pull-rights">
    		<button class="order-1 button-tiffany" style="margin-right: 1.3em; padding-left: 8px;">Create Link</button>
    		<div class="order-2" style="padding-right: 1.2em; margin-top: 0.5em;">?</div>
    		<div class="order-3 font-weight-bold" style="padding-right: 1.2em; margin-top: 0.5em;">Sign Out</div>
      </div>
  	</div>
  </nav>
</section>



<section>

  <div class="body-content-width body-content-height flex-justify-content-between">
    <div id="setup-max-width" class="pull-lefts flex-align-self-start" style="padding-left: 20px; border: 1px solid #ccc!important; margin-left: 10px; margin-right: 10px;">
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
  		<div style="margin-top: 20px;">
  			<div class="font-weight-bold line-height">Select Deepviews template:</div>
  			<div class="line-height">
  				<select style="width: 50%;">
  					<option>Timev - buy &amp; sell local service development</option>
  				</select>
  			</div>
  			<div class="font-weight-bold line-height">Customize the SMS your users will receive:</div>
        <div class="line-height">
  			  <input type="text" style="width: 90%;" value="Click here to download Timev - Buy & Sell Local Service link" required>
        </div>
  			<div class="line-height">Use link as a placeholder for the link in the SMS. <a>See the docs</a> for more placeholders. </div>
  			<div style="margin-top: 50px;"></div>
  			<div class="line-height">Your desktop redirects will also be updated in <a> Link Settings</a></div>
  			<div class="pull-rights">
  				<button class="button-tiffany" style="margin-right: 10px;">Save</button>
  			</div>
  		</div>
  	</div>


  	<div id="example-max-width" class="pull-lefts padding-left-right padding-top-bottom flex-align-self-end" style="border: 1px solid #ccc!important; padding-left: 1em;">
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
  			<div class="padding-left-right" style="border: 2px solid #ccc!important;">
  				<div class="font-weight-bold" style="font-size: 0.8em; padding-top: 10px;">YOUR APP NAME</div>
  				<h1 style="font-size: 1.5em;">Title for your app card content here</h1>
  				<p>Description of the content of the card here and if the information is too long cut it at five lines..<a>more</a></p>
  				<div style="margin-top: 10px;"></div>
  				<div>
            <p style="margin-top: 3.7em; font-size: 0.7em !important;">Enter your phone number to download apps</p>
  					<input type="text" class="pull-lefts" required>
  					<button id="button-for-send">Send</button>
  				</div>
  			</div>
  		</div>

      <div class="line-height">
    		<div class="font-weight-bold line-height" style="font-size: 1.0em !important;">Test link:</div>
    		<a>https://timev.co</a>
      </div>

  	</div>
  </div>
</section>
</body>
</html>