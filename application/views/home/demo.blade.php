<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en" itemscope itemtype="http://schema.org/Product"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/b/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Gumby - A Flexible, Responsive CSS Framework - Powered by SASS</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="humans.txt">

  <link rel="shortcut icon" href="favicon.png" type="image/x-icon" />

  <!-- Facebook Metadata /-->
  <meta property="fb:page_id" content="" />
  <meta property="og:image" content="" />
  <meta property="og:description" content=""/>
  <meta property="og:title" content=""/>

  <!-- Google+ Metadata /-->
  <meta itemprop="name" content="">
  <meta itemprop="description" content="">
  <meta itemprop="image" content="">

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

  <!-- We highly recommend you use SASS and write your custom styles in sass/_custom.scss.
       However, there is a blank style.css in the css directory should you prefer -->
  <link rel="stylesheet" href="css/gumby.css">
  <!-- <link rel="stylesheet" href="css/style.css"> -->

  <script src="js/libs/modernizr-2.6.2.min.js"></script>
</head>

<style>
  .btn,.drawer { margin-bottom:10px; }
  .drawer { text-align: center; }
  h1.lead { border-bottom: 1px dotted #ccc; margin-bottom: 30px; }
  h4.lead { margin-bottom:10px; }
  #icon_map ul li { font-size: 16px; }
  .smallify { font-size: 13px; }
  .modal h2, .modal .btn { margin: 5% 0 20px; }
</style>

<body>

  <div class="modal" id="modal1">
    <div class="content">
      <a class="close switch" gumby-trigger="|#modal1"><i class="icon-cancel" /></i></a>
      <div class="row">
        <div class="ten columns centered center-text">
          <h2>This is a modal.</h2>
          <p>Gumby modals are easy to make using Toggles &amp; Switches. The <span class="label default">.modal</span> class already has the required styles which you can open and close using Toggles &amp; Switches.</p>

          <p class="btn primary medium"><a href="#" class="switch" gumby-trigger="|#modal1">Close Modal</a></p>
        </div>
      </div>
    </div>
  </div>

  <div class="navbar" id="nav1">
    <div class="row">
      <a class="toggle" gumby-trigger="#nav1 > .row > ul" href="#"><i class="icon-menu"></i></a>
      <h1 class="four columns logo">
        <a href="#">
          <img src="img/gumby_mainlogo.png" gumby-retina />
        </a>
      </h1>
      <ul class="eight columns">
        <li><a href="#">Features</a></li>
        <li>
          <a href="#">Documentation</a>
          <div class="dropdown">
            <ul>
              <li><a href="#">Item</a></li>
              <li><a href="#">Item</a></li>
              <li><a href="#">Item</a></li>
              <li>
                <a href="#">I HAVE STUFF NESTED UNDER ME</a>
                <div class="dropdown">
                  <ul>
                    <li><a href="">nested</a></li>
                    <li><a href="">nested</a></li>
                    <li><a href="">nested</a></li>
                    <li><a href="">nested</a></li>
                    <li><a href="">nested</a></li>
                  </ul>
                </div>
              </li>
              <li><a href="#">Item</a></li>
              <li><a href="#">Item</a></li>
              <li><a href="#">Item</a></li>
              <li><a href="#">Item</a></li>
              <li><a href="#">Item</a></li>
              <li><a href="#">Item</a></li>
              <li><a href="#">Item</a></li>
            </ul>
          </div>
        </li>
        <li><a href="#">Customize</a></li>
        <li class="field"><input class="search input" type="search" placeholder="Search" /></li>
      </ul>
    </div>
  </div>
  <div class="navbar row" id="nav2">
    <a class="toggle" gumby-trigger="#nav2 > ul" href="#"><i class="icon-menu"></i></a>
    <h1 class="four columns logo">
      <a href="#">
        <img src="img/gumby_mainlogo.png" gumby-retina />
      </a>
    </h1>
    <ul class="eight columns">
      <li><a href="#">Features</a></li>
        <li>
          <a href="#">Documentation</a>
          <div class="dropdown">
            <ul>
              <li><a href="#">Item</a></li>
              <li><a href="#">Item</a></li>
              <li><a href="#">Item</a></li>
              <li><a href="#">Item</a></li>
              <li><a href="#">Item</a></li>
            </ul>
          </div>
        </li>
        <li><a href="#">Customize</a></li>
        <li>
          <button class="medium pretty default btn">
            <a href="#">Download</a>
          </button>
        </li>
    </ul>
  </div>
  <div class="pretty navbar" gumby-fixed="top" id="nav3">
    <div class="row">
      <a class="toggle" gumby-trigger="#nav3 > .row > ul" href="#"><i class="icon-menu"></i></a>
      <h1 class="four columns logo">
        <a href="#">
          <img src="img/gumby_mainlogo.png" gumby-retina />
        </a>
      </h1>
      <ul class="eight columns">
        <li><a href="#">Features</a></li>
        <li>
          <a href="#">Documentation</a>
          <div class="dropdown">
            <ul>
              <li><a href="#">Item</a></li>
              <li><a href="#">Item</a></li>
              <li><a href="#">Item</a></li>
              <li><a href="#">Item</a></li>
              <li><a href="#">Item</a></li>
            </ul>
          </div>
        </li>
        <li><a href="#">Customize</a></li>
        <li class="field"><input class="search input" type="search" placeholder="Search" /></li>
      </ul>
    </div>
  </div>
  <div class="pretty navbar row" id="nav4">
    <a class="toggle" gumby-trigger="#nav4 > ul" href="#"><i class="icon-menu"></i></a>
    <h1 class="four columns logo">
      <a href="#">
        <img src="img/gumby_mainlogo.png" gumby-retina />
      </a>
    </h1>
    <ul class="eight columns">
      <li><a href="#">About</a></li>
      <li>
        <a href="#">Documentation</a>
        <div class="dropdown">
          <ul>
            <li><a href="#">Item</a></li>
            <li><a href="#">Item</a></li>
            <li><a href="#">Item</a></li>
            <li><a href="#">Item</a></li>
            <li><a href="#">Item</a></li>
          </ul>
        </div>
      </li>
      <li><a href="#">Customize</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </div>
  <div class="container">
    <div class="row">
      <h1 class="lead">Typography</h1>
      <div class="row">
        <p><a href="#" class="skip switch" gumby-trigger="#drawer1" gumby-goto="#drawers" gumby-duration="500" gumby-offset="-130">Skip to drawers and open top one</a></p>
        <h1>My Cool First Level Headline reaalllyyy long headline</h1>
        <p>This is my awesome paragraph text, it is the base style/size for paragraph text. We love 16px for body copy as it provides for a more consistent cross browser experience. It is also digitally equivalent to to 12pt standard set in print design. We also love the golden ratio, all of the type set here is based off of that deliciously elegant ratio. Enjoy!</p>
        <p>This is my awesome paragraph text, it is the base style/size for paragraph text. We love 16px for body copy as it provides for a more consistent cross browser experience. It is also digitally equivalent to to 12pt standard set in print design. We also love the golden ratio, all of the type set here is based off of that deliciously elegant ratio. Enjoy!</p>
        <p>This is my awesome paragraph text, it is the base style/size for paragraph text. We love 16px for body copy as it provides for a more consistent cross browser experience. It is also digitally equivalent to to 12pt standard set in print design. We also love the golden ratio, all of the type set here is based off of that deliciously elegant ratio. Enjoy!</p>
        <h2>My Cool Second Level Headline</h2>
        <p>This is my awesome paragraph text, it is the base style/size for paragraph text. We love 16px for body copy as it provides for a more consistent cross browser experience. It is also digitally equivalent to to 12pt standard set in print design. We also love the golden ratio, all of the type set here is based off of that deliciously elegant ratio. Enjoy!</p>
        <h3>My Cool Third Level Headline</h3>
        <p>This is my awesome paragraph text, it is the base style/size for paragraph text. We love 16px for body copy as it provides for a more consistent cross browser experience. It is also digitally equivalent to to 12pt standard set in print design. We also love the golden ratio, all of the type set here is based off of that deliciously elegant ratio. Enjoy!</p>
        <h4>My Cool Fourth Level Headline</h4>
        <p>This is my awesome paragraph text, it is the base style/size for paragraph text. We love 16px for body copy as it provides for a more consistent cross browser experience. It is also digitally equivalent to to 12pt standard set in print design. We also love the golden ratio, all of the type set here is based off of that deliciously elegant ratio. Enjoy!</p>
        <h5>My Cool Fifth Level Headline</h5>
        <p>This is my awesome paragraph text, it is the base style/size for paragraph text. We love 16px for body copy as it provides for a more consistent cross browser experience. It is also digitally equivalent to to 12pt standard set in print design. We also love the golden ratio, all of the type set here is based off of that deliciously elegant ratio. Enjoy!</p>
        <h6>My Cool Sixth Level Headline</h6>
        <p>This is my awesome paragraph text, it is the base style/size for paragraph text. We love 16px for body copy as it provides for a more consistent cross browser experience. It is also digitally equivalent to to 12pt standard set in print design. We also love the golden ratio, all of the type set here is based off of that deliciously elegant ratio. Enjoy!</p>
      </div>
      <div class="row">
        <div class="four columns">
          <h4 class="lead">ul.disc</h4>
          <ul class="disc">
            <li>List item</li>
            <li>List item</li>
            <li>List item</li>
              <ul class="disc">
                <li>Nested item</li>
                <li>Nested item</li>
              </ul>
            <li>List item</li>
            <li>List item</li>
            <li>List item</li>
            <li>List item</li>
          </ul>
        </div>
        <div class="four columns">
          <h4 class="lead">ul.circle</h4>
          <ul class="circle">
            <li>List item</li>
            <li>List item</li>
            <li>List item</li>
              <ul class="disc">
                <li>Nested item</li>
                <li>Nested item</li>
              </ul>
            <li>List item</li>
            <li>List item</li>
            <li>List item</li>
            <li>List item</li>
          </ul>
        </div>
        <div class="four columns">
          <h4 class="lead">ul.square</h4>
          <ul class="square">
            <li>List item</li>
            <li>List item</li>
            <li>List item</li>
              <ul class="disc">
                <li>Nested item</li>
                <li>Nested item</li>
              </ul>
            <li>List item</li>
            <li>List item</li>
            <li>List item</li>
            <li>List item</li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="four columns">
          <h4 class="lead">ol</h4>
          <ol>
            <li>List item</li>
            <li>List item</li>
            <li>List item</li>
              <ul class="disc">
                <li>Nested item</li>
                <li>Nested item</li>
              </ul>
            <li>List item</li>
            <li>List item</li>
            <li>List item</li>
            <li>List item</li>
          </ol>
        </div>
        <div class="eight columns">
          <h4 class="lead">Definition list</h4>
          <dl>
            <dt>Definition Term</dt>
            <dd>Definition text, you can add as many of these as you need. The line-height matches paragraphs.</dd>
          </dl>
        </div>
      </div>

    </div>
    <div class="row">
      <h1 class="lead">Buttons</h1>
      <div class="row">
        <div class="four columns">
          <h4 class="lead">Sizes</h4>
          <div class="xlarge btn default"><a href="#">Extra Large</a></div>
          <div class="large btn default"><a href="#">Large</a></div>
          <div class="medium btn default"><a href="#">Medium</a></div>
          <div class="small btn default"><a href="#">Small</a></div>
          <div class="medium oval btn default"><a href="#">Oval</a></div>
          <div class="medium metro rounded btn default"><a href="#">Rounded</a></div>
          <div class="medium squared btn default"><a href="#">Squared</a></div>
          <div class="medium btn pill-left default"><a href="#">Pill Left</a></div>
          <div class="medium btn pill-right default"><a href="#">Pill Right</a></div>
        </div>
        <div class="four columns">
          <h4 class="lead">Metro Style</h4>
          <div class="medium primary btn"><a href="#">Primary</a></div>
          <div class="medium secondary btn"><a href="#">Secondary</a></div>
          <div class="medium default btn"><a href="#">Default</a></div>
          <div class="medium info btn"><a href="#">Info</a></div>
          <div class="medium danger btn"><a href="#">Danger</a></div>
          <div class="medium warning btn"><a href="#">Warning</a></div>
          <div class="medium success btn"><a href="#">Success</a></div>
          <div class="medium info btn icon-left entypo icon-mail"><a href="#">Icon Left</a></div>
          <div class="medium default btn icon-right entypo icon-camera"><a href="#">Icon Right</a></div>
          <div class="medium default btn"><input type="submit" value="Submit" /></div>
          <div class="medium info btn"><button>Button</button></div>
        </div>
        <div class="four columns pretty">
          <h4 class="lead">Pretty Style</h4>
          <div class="pretty medium primary btn"><a href="#">Primary</a></div>
          <div class="pretty medium secondary btn"><a href="#">Secondary</a></div>
          <div class="pretty medium default btn"><a href="#">Default</a></div>
          <div class="pretty medium info btn"><a href="#">Info</a></div>
          <div class="pretty medium danger btn"><a href="#">Danger</a></div>
          <div class="pretty medium warning btn"><a href="#">Warning</a></div>
          <div class="pretty medium success btn"><a href="#">Success</a></div>
          <div class="medium info btn icon-left icon-user"><a href="#">Icon Left</a></div>
          <div class="medium default btn icon-right icon-camera"><a href="#">Icon Right</a></div>
          <div class="pretty medium default btn"><input type="submit" value="Submit" /></div>
          <div class="pretty medium info btn"><button>Button</button></div>
        </div>
      </div>
    </div>
    <div class="row">
      <h1 class="lead">Indicators</h1>
      <div class="row">
        <div class="four columns">
          <h4 class="lead">Badges</h4>
          <li class="primary badge">2</li>
          <li class="secondary badge">2</li>
          <li class="default badge">2</li>
          <li class="info badge">2</li>
          <li class="danger badge">2</li>
          <li class="warning badge">2</li>
          <li class="success badge">2</li>
          <li class="light badge">2</li>
          <li class="dark badge">2</li>
        </div>
        <div class="four columns">
          <h4 class="lead">Labels</h4>
          <li class="primary label">Primary</li>
          <li class="secondary label">Secondary</li>
          <li class="default label">Default</li>
          <li class="info label">Info</li>
          <li class="danger label">Important</li>
          <li class="warning label">Warning</li>
          <li class="success label">Success</li>
          <li class="light label">Light</li>
          <li class="dark label">Dark</li>
        </div>
        <div class="four columns">
          <h4 class="lead">Alerts</h4>
          <li class="primary alert">KHAAAAAAAAAAAAAAANNNN!!!!</li>
          <li class="secondary alert">We are the Silence. And Silence will fall!</li>
          <li class="default alert">Fez's are cool.</li>
          <li class="info alert">Don't blink. Blink and you're dead.</li>
          <li class="danger alert">I’m sorry, Dave. I’m afraid I can’t do that.</li>
          <li class="warning alert">My spidey sense is tingling...</li>
          <li class="success alert">Great Success! Very nice!</li>
        </div>
      </div>
    </div>
    <div class="row">
      <h1 class="lead">Forms</h1>
      <div class="row">
        <div class="four columns">
          <h4 class="lead">Text Inputs</h4>
          <form>
            <ul>
              <li class="field"><input class="text input" type="text" placeholder="Text input" /></li>
              <li class="field"><input class="email input" type="email" placeholder="Email input" /></li>
              <li class="field"><input class="password input" type="password" placeholder="Password input" /></li>
              <li class="field"><input class="phone input" type="tel" placeholder="Telephone Number" /></li>
              <li class="field"><input class="numeric input" type="number" placeholder="Numeric input" /></li>
              <li class="field"><input class="search input" type="search" placeholder="Search input" /></li>
              <li class="field"><textarea class="input textarea" placeholder="Textarea" rows="3"></textarea></li>
              <li class="field success"><input class="text input" type="text" placeholder="Text input" /></li>
              <li class="field warning"><input class="email input" type="email" placeholder="Email input" /></li>
              <li class="field danger"><input class="password input" type="password" placeholder="Password input" /></li>
            </ul>
          </form>
        </div>
        <div class="four columns">
          <h4 class="lead">Conjoined Inputs</h4>
          <form>
            <ul>
              <li class="prepend field">
                <span class="adjoined">@</span>
                <input class="xwide text input" type="text" placeholder="Text input" />
              </li>
              <li class="append field">
                <input class="xwide email input" type="email" placeholder="Email input" />
                <span class="adjoined">@</span>
              </li>
              <li class="prepend append field">
                <span class="adjoined">$</span>
                <input class="wide text input" type="text" placeholder="Text input" />
                <span class="adjoined">.00</span>
              </li>
              <li class="prepend field">
                <div class="medium primary btn"><a href="#">Go</a></div>
                <input class="wide text input" type="text" placeholder="Text input" />
              </li>
              <li class="append field">
                <input class="wide email input" type="email" placeholder="Email input" />
                <div class="medium primary btn"><a href="#">Go</a></div>
              </li>
              <li class="prepend append field">
                <span class="adjoined">$</span>
                <input class="normal text input" type="text" placeholder="Text input" />
                <div class="medium primary btn"><a href="#">Go</a></div>
              </li>
              <li class="prepend append double field">
                <input class="text input" type="text" placeholder="Text input" />
                <input class="password input" type="password" placeholder="Password input" />
              </li>
            </ul>
          </form>
        </div>
        <div class="four columns">
          <h4 class="lead">Input Sizes</h4>
          <form>
            <ul>
              <li class="field"><input class="xxwide text input" type="text" placeholder="xxwide input" /></li>
              <li class="field">
                <input class="xwide email input" type="email" placeholder="xwide input" />
                <input class="xnarrow text input" type="text" placeholder="xnarrow input" />
              </li>
              <li class="field">
                <input class="wide text input" type="password" placeholder="wide input" />
                <input class="narrow text input" type="text" placeholder="narrow input" />
              </li>
              <li class="field">
                <input class="normal text input" type="text" placeholder="normal input" />
                <input class="normal text input" type="text" placeholder="normal input" />
              </li>
              <li class="field">
                <input class="narrow text input" type="text" placeholder="narrow input" />
                <input class="wide text input" type="text" placeholder="wide input" />
              </li>
              <li class="field">
                <input class="xnarrow text input" type="text" placeholder="xnarrow input" />
                <input class="xwide text input" type="text" placeholder="xwide input" />
              </li>
            </ul>
            <fieldset>
              <legend>Fieldset with legend</legend>
              <ul>
                <li class="field">
                  <label class="inline" for="text1">Label 1</label>
                  <input class="wide text input" name="text1" type="text" placeholder="wide input" />
                </li>
                <li class="field">
                  <label class="inline" for="text2">Label 2</label>
                  <input class="wide password input" name="text2" type="password" placeholder="wide input" />
                </li>
              </ul>
            </fieldset>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="four columns">
          <h4 class="lead">Picker (&lt;select&gt;)</h4>
          <form>
            <ul>
              <li class="field">
                <div class="picker">
                  <select>
                    <option value="#" disabled>Favorite Dalek phrase...</option>
                    <option>EXTERMINATE</option>
                    <option>EXTERMINATE</option>
                    <option>EXTERMINATE</option>
                    <option>EXTERMINATE</option>
                    <option>EXTERMINATE</option>
                    <option>EXTERMINATE</option>
                    <option>EXTERMINATE</option>
                    <option>EXTERMINATE</option>
                  </select>
                </div>
              </li>
            </ul>
          </form>
        </div>
        <div class="four columns">
          <h4 class="lead">Radio Buttons</h4>
          <form>
            <ul>
              <li class="field">
                <label class="radio checked" for="radio1">
                  <input name="radio" value="1" type="radio" id="radio1" checked="checked">
                  <span></span> Radio Button 1
                </label>
                <label class="radio" for="radio2">
                  <input name="radio" value="2" type="radio" id="radio2">
                  <span></span> Radio Button 2
                </label>
                <label class="radio" for="radio3">
                  <input name="radio" value="3" type="radio" id="radio3">
                  <span></span> Radio Button 3
                </label>
              </li>
            </ul>
          </form>
        </div>
        <div class="four columns">
          <h4 class="lead">Check Boxes</h4>
          <form>
            <ul>
              <li class="field">
                <label class="checkbox" for="checkbox1">
                  <input name="checkbox1" type="checkbox" id="checkbox1">
                  <span></span> Checkbox 1
                </label>
                <label class="checkbox" for="checkbox2">
                  <input name="checkbox2" type="checkbox" id="checkbox2">
                  <span></span> Checkbox 2
                </label>
                <label class="checkbox checked" for="checkbox3">
                  <input name="checkbox3" checked="checked" type="checkbox" id="checkbox3">
                  <span></span> Checkbox 3
                </label>
              </li>
            </ul>
          </form>
        </div>
      </div>
      <div class="row">
        <h1 class="lead">Tabs</h1>
        <div class="row">
          <div class="six columns">
            <section class="tabs">
              <h4 class="lead">Basic Tabs</h4>
              <ul class="tab-nav">
                <li><a href="#">Tab 1</a></li>
                <li class="active"><a href="#">Tab 2</a></li>
                <li><a href="#">Tab 3</a></li>
              </ul>
              <div class="tab-content">
                <p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
              </div>
              <div class="tab-content active">
                <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
              </div>
              <div class="tab-content">
                <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
                <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio.</p>
                <div class="medium primary btn pull_left"><a href="">My cool button</a></div>
              </div>
            </section>
          </div>
          <div class="six columns">
            <section class="pill tabs">
              <h4 class="lead">Pill Tabs</h4>
              <ul class="tab-nav">
                <li class="active"><a href="#">Tab 1</a></li>
                <li><a href="#">Tab 2</a></li>
                <li><a href="#">Tab 3</a></li>
              </ul>
              <div class="tab-content active">
                <p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
                <div class="medium primary btn pull_left"><a href="">My cool button</a></div>
              </div>
              <div class="tab-content">
                <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
              </div>
              <div class="tab-content">
                <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
                <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
              </div>
            </section>
          </div>
        </div>
        <div class="row">
          <div class="eight columns">
            <section class="vertical tabs">
              <h4 class="lead">Vertical Tabs</h4>
              <ul class="tab-nav four columns">
                <li><a href="#">Tab 1</a></li>
                <li class="active"><a href="#">Tab 2</a></li>
                <li><a href="#">Tab 3</a></li>
              </ul>
              <div class="tab-content eight columns">
                <p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
              </div>
              <div class="tab-content eight columns active">
                <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
                <div class="row">
                  <div class="medium primary btn six columns centered"><a href="">My cool button</a></div>
                </div>
              </div>
              <div class="tab-content eight columns">
                <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
                <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio.</p>
              </div>
            </section>
          </div>
        </div>
      </div>
      <div class="row" id="drawers">
        <h1 class="lead">Drawers</h1>
        <p class="btn medium primary">
          <a href="#"  class="switch" gumby-trigger="#drawer1">Open Top Drawer</a>
        </p>
        <p class="btn medium primary">
          <a href="#"  class="toggle" gumby-trigger="#drawer2|#drawer3">Toggle Bottom Drawers</a>
        </p>
        <p class="btn medium primary">
          <a href="#"  class="switch" gumby-trigger="|.drawer">Close All Drawers</a>
        </p>
        <div class="row">
          <div class="twelve columns">
            <div class="drawer" id="drawer1">
              <h2><a href="http://www.digitalsurgeons.com">Digital Surgeons</a></h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="six columns">
            <div class="drawer" id="drawer2">
              <h2><a href="http://www.digitalsurgeons.com">Digital Surgeons</a></h2>
            </div>
          </div>
          <div class="six columns">
            <div class="drawer" id="drawer3">
              <h2><a href="http://www.digitalsurgeons.com">Digital Surgeons</a></h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row" id="modals">
        <h1 class="lead">Modals</h1>
        <p class="btn primary medium"><a href="#" class="switch" gumby-trigger="#modal1">Open Modal</a></p>
      </div>
      <div class="row">
        <h1 class="lead">Skip Links</h1>
        <div class="row">
          <div class="twelve columns">
            <div id="skiplink_1" style="position: relative;">
                <h4>First</h4>
                <p class="skiplink medium info"><a href="#" gumby-goto="#skiplink_2" gumby-offset="-60">Skip to second content</a></p>
                <p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. <a href="#" class="skip" gumby-goto="#skiplink_2" gumby-offset="-60">Unstyled skip link</a>. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante.</p>
            </div>
            <div id="skiplink_2" style="position: relative;">
                <h4>Second</h4>
                <p class="skiplink medium primary"><a href="#" gumby-goto="#skiplink_3" gumby-duration="2000" gumby-offset="-60">Skip to third content</a></p>
                <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis.</p>
            </div>
            <div id="skiplink_3" style="position: relative;">
                <h4>Third</h4>
                <p class="skiplink medium secondary pretty"><a href="#" gumby-goto="#skiplink_1" gumby-offset="-60">Go back to first content</a></p>
                <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. <a href="#" class="skip" gumby-goto="#skiplink_1" gumby-offset="-60">Unstyled skip link</a>. Vestibulum non ante.</p>

                <p class="skiplink medium default">
                  <a href="#" gumby-goto="top"><i class="icon-up-open-big"></i> Top of page</a>
                </p>

                 <p class="skiplink medium default">
                  <a href="#" gumby-goto="240"><i class="icon-up-open-big"></i> Skip to 240px</a>
                </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <h1 class="lead">Images</h1>
        <div class="row">
          <div class="twelve columns">
            <div class="row">
              <div class="five columns image circle">
                <img src="img/img_silence_demo.jpg"/>
              </div>
              <div class="three columns image circle">
                <img src="img/img_silence_demo.jpg"/>
              </div>
              <div class="two columns image circle">
                <img src="img/img_silence_demo.jpg"/>
              </div>
              <div class="one columns image circle">
                <img src="img/img_silence_demo.jpg"/>
              </div>
            </div>
            <div class="row">
              <div class="four columns image rounded">
                <img src="img/img_silence_demo.jpg"/>
              </div>
              <div class="four columns image photo">
                <img src="img/img_silence_demo.jpg"/>
              </div>
              <div class="four columns image polaroid photo">
                <img src="img/img_silence_demo.jpg"/>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row" id="tiles">
        <h1 class="lead">Tiles</h1>
        <div class="row">
          <div class="four columns">
            <h4 class="lead">2-up</h4>
            <ul class="two_up tiles">
              <li class="rounded image"><img src="img/img_silence_demo.jpg"/></li>
              <li class="rounded image"><img src="img/img_silence_demo.jpg"/></li>
              <li class="rounded image"><img src="img/img_silence_demo.jpg"/></li>
              <li class="rounded image"><img src="img/img_silence_demo.jpg"/></li>
              <li class="rounded image"><img src="img/img_silence_demo.jpg"/></li>
              <li class="rounded image"><img src="img/img_silence_demo.jpg"/></li>
            </ul>
          </div>
          <div class="four columns">
            <h4 class="lead">3-up</h4>
            <ul class="three_up tiles">
              <li class="rounded image"><img src="img/img_silence_demo.jpg"/></li>
              <li class="rounded image"><img src="img/img_silence_demo.jpg"/></li>
              <li class="rounded image"><img src="img/img_silence_demo.jpg"/></li>
              <li class="rounded image"><img src="img/img_silence_demo.jpg"/></li>
              <li class="rounded image"><img src="img/img_silence_demo.jpg"/></li>
              <li class="rounded image"><img src="img/img_silence_demo.jpg"/></li>
            </ul>
          </div>
          <div class="four columns">
            <h4 class="lead">4-up</h4>
            <ul class="four_up tiles">
              <li class="rounded image"><img src="img/img_silence_demo.jpg"/></li>
              <li class="rounded image"><img src="img/img_silence_demo.jpg"/></li>
              <li class="rounded image"><img src="img/img_silence_demo.jpg"/></li>
              <li class="rounded image"><img src="img/img_silence_demo.jpg"/></li>
              <li class="rounded image"><img src="img/img_silence_demo.jpg"/></li>
              <li class="rounded image"><img src="img/img_silence_demo.jpg"/></li>
              <li class="rounded image"><img src="img/img_silence_demo.jpg"/></li>
              <li class="rounded image"><img src="img/img_silence_demo.jpg"/></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="four columns">
            <h4 class="lead">5-up</h4>
            <ul class="five_up tiles">
              <li class="rounded image"><img src="img/img_silence_demo.jpg"/></li>
              <li class="rounded image"><img src="img/img_silence_demo.jpg"/></li>
              <li class="rounded image"><img src="img/img_silence_demo.jpg"/></li>
              <li class="rounded image"><img src="img/img_silence_demo.jpg"/></li>
              <li class="rounded image"><img src="img/img_silence_demo.jpg"/></li>
              <li class="rounded image"><img src="img/img_silence_demo.jpg"/></li>
              <li class="rounded image"><img src="img/img_silence_demo.jpg"/></li>
              <li class="rounded image"><img src="img/img_silence_demo.jpg"/></li>
              <li class="rounded image"><img src="img/img_silence_demo.jpg"/></li>
              <li class="rounded image"><img src="img/img_silence_demo.jpg"/></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row" id="video_stuff">
        <h1 class="lead">Intrinsic Ratio Video Embed</h1>
        <div class="row" style="margin-bottom: 30px">
          <div class="six columns">
            <article class="youtube video">
              <iframe width="560" height="315" src="http://www.youtube.com/embed/N0IDkzhBQMg" frameborder="0" allowfullscreen></iframe>
            </article>
          </div>
          <div class="six columns">
            <article class="vimeo video">
              <iframe src="http://player.vimeo.com/video/50650297" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
            </article>
          </div>
        </div>
        <div class="row">
          <div class="six columns">
            <article class="twitch video">
              <object type="application/x-shockwave-flash" height="378" width="620" id="live_embed_player_flash" data="http://www.twitch.tv/widgets/live_embed_player.swf?channel=riotgames" bgcolor="#000000"><param name="allowFullScreen" value="true" /><param name="allowScriptAccess" value="always" /><param name="allowNetworking" value="all" /><param name="movie" value="http://www.twitch.tv/widgets/live_embed_player.swf" /><param name="flashvars" value="hostname=www.twitch.tv&channel=riotgames&auto_play=true&start_volume=25" /></object>
            </article>
          </div>
        </div>
      </div>
      <div class="row" id="icon_map">
        <div class="row">
          <h1 class="lead">Icon Map</h1>
          <p>All icons are (class="icon-*")</p>
        </div>
        <ul class="row">
          <li class="two columns"><i class="icon-note"></i> note</li>
          <li class="two columns"><i class="icon-note-beamed"></i> note-beamed</li>
          <li class="two columns"><i class="icon-music"></i> music</li>
          <li class="two columns"><i class="icon-search"></i> search</li>
          <li class="two columns"><i class="icon-flashlight"></i> flashlight</li>
          <li class="two columns"><i class="icon-mail"></i> mail</li>
        </ul>
        <ul class="row">
          <li class="two columns"><i class="icon-heart"></i> heart</li>
          <li class="two columns"><i class="icon-heart-empty"></i> heart-empty</li>
          <li class="two columns"><i class="icon-star"></i> star</li>
          <li class="two columns"><i class="icon-star-empty"></i> star-empty</li>
          <li class="two columns"><i class="icon-user"></i> user</li>
          <li class="two columns"><i class="icon-users"></i> users</li>
        </ul>
        <ul class="row">
          <li class="two columns"><i class="icon-user-add"></i> user-add</li>
          <li class="two columns"><i class="icon-video"></i> video</li>
          <li class="two columns"><i class="icon-picture"></i> picture</li>
          <li class="two columns"><i class="icon-camera"></i> camera</li>
          <li class="two columns"><i class="icon-layout"></i> layout</li>
          <li class="two columns"><i class="icon-menu"></i> menu</li>
        </ul>
        <ul class="row">
          <li class="two columns"><i class="icon-check"></i> check</li>
          <li class="two columns"><i class="icon-cancel"></i> cancel</li>
          <li class="two columns"><i class="icon-cancel-circled"></i> cancel-circled</li>
          <li class="two columns"><i class="icon-cancel-squared"></i> cancel-square</li>
          <li class="two columns"><i class="icon-plus"></i> plus</li>
          <li class="two columns"><i class="icon-plus-circled"></i> plus-circled</li>
        </ul>
        <ul class="row">
          <li class="two columns"><i class="icon-plus-squared"></i> plus-squared</li>
          <li class="two columns"><i class="icon-minus"></i> minus</li>
          <li class="two columns"><i class="icon-minus-circled"></i> minus-circled</li>
          <li class="two columns"><i class="icon-minus-squared"></i> minus-square</li>
          <li class="two columns"><i class="icon-help"></i> help</li>
          <li class="two columns"><i class="icon-help-circled"></i> help-circled</li>
        </ul>
        <ul class="row">
          <li class="two columns"><i class="icon-info"></i> info</li>
          <li class="two columns"><i class="icon-info-circled"></i> info-circled</li>
          <li class="two columns"><i class="icon-back"></i> back</li>
          <li class="two columns"><i class="icon-home"></i> home</li>
          <li class="two columns"><i class="icon-link"></i> link</li>
          <li class="two columns"><i class="icon-attach"></i> attach</li>
        </ul>
        <ul class="row">
          <li class="two columns"><i class="icon-lock"></i> lock</li>
          <li class="two columns"><i class="icon-lock-open"></i> lock-open</li>
          <li class="two columns"><i class="icon-eye"></i> eye</li>
          <li class="two columns"><i class="icon-tag"></i> tag</li>
          <li class="two columns"><i class="icon-bookmark"></i> bookmark</li>
          <li class="two columns"><i class="icon-bookmarks"></i> bookmarks</li>
        </ul>
        <ul class="row">
          <li class="two columns"><i class="icon-flag"></i> flag</li>
          <li class="two columns"><i class="icon-thumbs-up"></i> thumbs-up</li>
          <li class="two columns"><i class="icon-thumbs-down"></i> thumbs-down</li>
          <li class="two columns"><i class="icon-download"></i> download</li>
          <li class="two columns"><i class="icon-upload"></i> upload</li>
          <li class="two columns"><i class="icon-upload-cloud"></i> upload-cloud</li>
        </ul>
        <ul class="row">
          <li class="two columns"><i class="icon-reply"></i> reply</li>
          <li class="two columns"><i class="icon-reply-all"></i> reply-all</li>
          <li class="two columns"><i class="icon-forward"></i> forward</li>
          <li class="two columns"><i class="icon-quote"></i> quote</li>
          <li class="two columns"><i class="icon-code"></i> code</li>
          <li class="two columns"><i class="icon-export"></i> export</li>
        </ul>
        <ul class="row">
          <li class="two columns"><i class="icon-pencil"></i> pencil</li>
          <li class="two columns"><i class="icon-feather"></i> feather</li>
          <li class="two columns"><i class="icon-print"></i> print</li>
          <li class="two columns"><i class="icon-retweet"></i> retweet</li>
          <li class="two columns"><i class="icon-keyboard"></i> keyboard</li>
          <li class="two columns"><i class="icon-comment"></i> comment</li>
        </ul>
        <ul class="row">
          <li class="two columns"><i class="icon-chat"></i> chat</li>
          <li class="two columns"><i class="icon-bell"></i> bell</li>
          <li class="two columns"><i class="icon-attention"></i> attention</li>
          <li class="two columns"><i class="icon-alert"></i>alert</li>
          <li class="two columns"><i class="icon-vcard"></i> vcard</li>
          <li class="two columns"><i class="icon-address"></i> address</li>
        </ul>
        <ul class="row">
          <li class="two columns"><i class="icon-location"></i> location</li>
          <li class="two columns"><i class="icon-map"></i> map</li>
          <li class="two columns"><i class="icon-direction"></i> direction</li>
          <li class="two columns"><i class="icon-compass"></i> compass</li>
          <li class="two columns"><i class="icon-cup"></i> cup</li>
          <li class="two columns"><i class="icon-trash"></i> trash</li>
        </ul>
        <ul class="row">
          <li class="two columns"><i class="icon-doc"></i> doc</li>
          <li class="two columns"><i class="icon-docs"></i> docs</li>
          <li class="two columns"><i class="icon-doc-landscape"></i> <span class="smallify">doc-landscape</span></li>
          <li class="two columns"><i class="icon-doc-text"></i> doc-text</li>
          <li class="two columns"><i class="icon-doc-text-inv"></i> doc-text-inv</li>
          <li class="two columns"><i class="icon-newspaper"></i> newspaper</li>
        </ul>
        <ul class="row">
          <li class="two columns"><i class="icon-book"></i> book</li>
          <li class="two columns"><i class="icon-book-open"></i> book-open</li>
          <li class="two columns"><i class="icon-folder"></i> folder</li>
          <li class="two columns"><i class="icon-archive"></i> archive</li>
          <li class="two columns"><i class="icon-box"></i> box</li>
          <li class="two columns"><i class="icon-rss"></i> rss</li>
        </ul>
        <ul class="row">
          <li class="two columns"><i class="icon-phone"></i> phone</li>
          <li class="two columns"><i class="icon-cog"></i> cog</li>
          <li class="two columns"><i class="icon-tools"></i> tools</li>
          <li class="two columns"><i class="icon-share"></i> share</li>
          <li class="two columns"><i class="icon-shareable"></i> shareable</li>
          <li class="two columns"><i class="icon-basket"></i> basket</li>
        </ul>
        <ul class="row">
          <li class="two columns"><i class="icon-bag"></i> bag</li>
          <li class="two columns"><i class="icon-calendar"></i> calendar</li>
          <li class="two columns"><i class="icon-login"></i> login</li>
          <li class="two columns"><i class="icon-logout"></i> logout</li>
          <li class="two columns"><i class="icon-mic"></i> mic</li>
          <li class="two columns"><i class="icon-mute"></i> mute</li>
        </ul>
        <ul class="row">
          <li class="two columns"><i class="icon-sound"></i> sound</li>
          <li class="two columns"><i class="icon-volume"></i> volume</li>
          <li class="two columns"><i class="icon-clock"></i> clock</li>
          <li class="two columns"><i class="icon-hourglass"></i> hourglass</li>
          <li class="two columns"><i class="icon-lamp"></i> lamp</li>
          <li class="two columns"><i class="icon-light-down"></i> light-down</li>
        </ul>
        <ul class="row">
          <li class="two columns"><i class="icon-light-up"></i> light-up</li>
          <li class="two columns"><i class="icon-adjust"></i> adjust</li>
          <li class="two columns"><i class="icon-block"></i> block</li>
          <li class="two columns"><i class="icon-resize-full"></i> resize-full</li>
          <li class="two columns"><i class="icon-resize-small"></i> resize-small</li>
          <li class="two columns"><i class="icon-popup"></i> popup</li>
        </ul>
        <ul class="row">
          <li class="two columns"><i class="icon-publish"></i> publish</li>
          <li class="two columns"><i class="icon-window"></i> window</li>
          <li class="two columns"><i class="icon-arrow-combo"></i> arrow-combo</li>
          <li class="two columns"><i class="icon-down-circled"></i> down-circled</li>
          <li class="two columns"><i class="icon-left-circled"></i> left-circled</li>
          <li class="two columns"><i class="icon-right-circled"></i> right-circled</li>
        </ul>
        <ul class="row">
          <li class="two columns"><i class="icon-up-circled"></i> up-circled</li>
          <li class="two columns"><i class="icon-up-open"></i> up-open</li>
          <li class="two columns"><i class="icon-down-open"></i> down-open</li>
          <li class="two columns"><i class="icon-left-open"></i> left-open</li>
          <li class="two columns"><i class="icon-right-open"></i> right-open</li>
          <li class="two columns"><i class="icon-up-open-mini"></i> up-open-mini</li>
        </ul>
        <ul class="row">
          <li class="two columns"><i class="icon-down-open-mini"></i> <span class="smallify">down-open-mini</span></li>
          <li class="two columns"><i class="icon-left-open-mini"></i> left-open-mini</li>
          <li class="two columns"><i class="icon-right-open-mini"></i> <span class="smallify">right-open-mini</span></li>
          <li class="two columns"><i class="icon-up-open-big"></i> up-open-big</li>
          <li class="two columns"><i class="icon-down-open-big"></i> <span class="smallify">down-open-big</span></li>
          <li class="two columns"><i class="icon-left-open-big"></i> left-open-big</li>
        </ul>
        <ul class="row">
          <li class="two columns"><i class="icon-right-open-big"></i> <span class="smallify">right-open-big</span></li>
          <li class="two columns"><i class="icon-down"></i> down</li>
          <li class="two columns"><i class="icon-arrow-left"></i> arrow-left</li>
          <li class="two columns"><i class="icon-arrow-right"></i> arrow-right</li>
          <li class="two columns"><i class="icon-up"></i> up</li>
          <li class="two columns"><i class="icon-up-dir"></i> up-dir</li>
        </ul>
        <ul class="row">
          <li class="two columns"><i class="icon-down-dir"></i> down-dir</li>
          <li class="two columns"><i class="icon-left-dir"></i> left-dir</li>
          <li class="two columns"><i class="icon-right-dir"></i> right-dir</li>
          <li class="two columns"><i class="icon-up-bold"></i> up-bold</li>
          <li class="two columns"><i class="icon-down-bold"></i> down-bold</li>
          <li class="two columns"><i class="icon-left-bold"></i> left-bold</li>
        </ul>
        <ul class="row">
          <li class="two columns"><i class="icon-right-bold"></i> right-bold</li>
          <li class="two columns"><i class="icon-up-thin"></i> up-thin</li>
          <li class="two columns"><i class="icon-down-thin"></i> down-thin</li>
          <li class="two columns"><i class="icon-left-thin"></i> left-thin</li>
          <li class="two columns"><i class="icon-right-thin"></i> right-thin</li>
          <li class="two columns"><i class="icon-ccw"></i> ccw</li>
        </ul>
        <ul class="row">
          <li class="two columns"><i class="icon-cw"></i> cw</li>
          <li class="two columns"><i class="icon-arrows-ccw"></i> arrows-ccw</li>
          <li class="two columns"><i class="icon-level-down"></i> level-down</li>
          <li class="two columns"><i class="icon-level-up"></i> level-up</li>
          <li class="two columns"><i class="icon-shuffle"></i> shuffle</li>
          <li class="two columns"><i class="icon-loop"></i> loop</li>
        </ul>
        <ul class="row">
          <li class="two columns"><i class="icon-switch"></i> switch</li>
          <li class="two columns"><i class="icon-play"></i> play</li>
          <li class="two columns"><i class="icon-stop"></i> stop</li>
          <li class="two columns"><i class="icon-pause"></i> pause</li>
          <li class="two columns"><i class="icon-record"></i> record</li>
          <li class="two columns"><i class="icon-to-end"></i> to-end</li>
        </ul>

        <ul class="row">
          <li class="two columns"><i class="icon-to-start"></i> to-start</li>
          <li class="two columns"><i class="icon-fast-forward"></i> fast-forward</li>
          <li class="two columns"><i class="icon-fast-backward"></i> fast-backward</li>
          <li class="two columns"><i class="icon-progress-0"></i> progress-0</li>
          <li class="two columns"><i class="icon-progress-1"></i> progress-1</li>
          <li class="two columns"><i class="icon-progress-2"></i> progress-2</li>
        </ul>
        <ul class="row">
          <li class="two columns"><i class="icon-progress-3"></i> progress-3</li>
          <li class="two columns"><i class="icon-target"></i> target</li>
          <li class="two columns"><i class="icon-palette"></i> palette</li>
          <li class="two columns"><i class="icon-list"></i> list</li>
          <li class="two columns"><i class="icon-list-add"></i> list-add</li>
          <li class="two columns"><i class="icon-signal"></i> signal</li>
        </ul>
        <ul class="row">
          <li class="two columns"><i class="icon-trophy"></i> trophy</li>
          <li class="two columns"><i class="icon-battery"></i> battery</li>
          <li class="two columns"><i class="icon-back-in-time"></i> back-in-time</li>
          <li class="two columns"><i class="icon-monitor"></i> monitor</li>
          <li class="two columns"><i class="icon-mobile"></i> mobile</li>
          <li class="two columns"><i class="icon-network"></i> network</li>
        </ul>
        <ul class="row">
          <li class="two columns"><i class="icon-cd"></i> cd</li>
          <li class="two columns"><i class="icon-inbox"></i> inbox</li>
          <li class="two columns"><i class="icon-install"></i> install</li>
          <li class="two columns"><i class="icon-globe"></i> globe</li>
          <li class="two columns"><i class="icon-cloud"></i> cloud</li>
          <li class="two columns"><i class="icon-cloud-thunder"></i> <span class="smallify">cloud-thunder</span></li>
        </ul>
        <ul class="row">
          <li class="two columns"><i class="icon-flash"></i> flash</li>
          <li class="two columns"><i class="icon-moon"></i> moon</li>
          <li class="two columns"><i class="icon-flight"></i> flight</li>
          <li class="two columns"><i class="icon-paper-plane"></i> paper-plane</li>
          <li class="two columns"><i class="icon-leaf"></i> leaf</li>
          <li class="two columns"><i class="icon-lifebuoy"></i> lifebuoy</li>
        </ul>
        <ul class="row">
          <li class="two columns"><i class="icon-mouse"></i> mouse</li>
          <li class="two columns"><i class="icon-briefcase"></i> briefcase</li>
          <li class="two columns"><i class="icon-suitcase"></i> suitcase</li>
          <li class="two columns"><i class="icon-dot"></i> dot</li>
          <li class="two columns"><i class="icon-dot-2"></i> dot-2</li>
          <li class="two columns"><i class="icon-dot-3"></i> dot-3</li>
        </ul>
        <ul class="row">
          <li class="two columns"><i class="icon-brush"></i> brush</li>
          <li class="two columns"><i class="icon-magnet"></i> magnet</li>
          <li class="two columns"><i class="icon-infinity"></i> infinity</li>
          <li class="two columns"><i class="icon-erase"></i> erase</li>
          <li class="two columns"><i class="icon-chart-pie"></i> chart-pie</li>
          <li class="two columns"><i class="icon-chart-line"></i> chart-line</li>
        </ul>
        <ul class="row">
          <li class="two columns"><i class="icon-chart-bar"></i> chart-bar</li>
          <li class="two columns"><i class="icon-chart-area"></i> chart-area</li>
          <li class="two columns"><i class="icon-tape"></i> tape</li>
          <li class="two columns"><i class="icon-graduation-cap"></i> <span class="smallify">graduation-cap</span></li>
          <li class="two columns"><i class="icon-language"></i> language</li>
          <li class="two columns"><i class="icon-ticket"></i> ticket</li>
        </ul>
        <ul class="row">
          <li class="two columns"><i class="icon-water"></i> water</li>
          <li class="two columns"><i class="icon-droplet"></i> droplet</li>
          <li class="two columns"><i class="icon-air"></i> air</li>
          <li class="two columns"><i class="icon-credit-card"></i> credit-card</li>
          <li class="two columns"><i class="icon-floppy"></i> floppy</li>
          <li class="two columns"><i class="icon-clipboard"></i> clipboard</li>
        </ul>
        <ul class="row">
          <li class="two columns"><i class="icon-megaphone"></i> megaphone</li>
          <li class="two columns"><i class="icon-database"></i> database</li>
          <li class="two columns"><i class="icon-drive"></i> drive</li>
          <li class="two columns"><i class="icon-bucket"></i> bucket</li>
          <li class="two columns"><i class="icon-thermometer"></i> thermometer</li>
          <li class="two columns"><i class="icon-key"></i> key</li>
        </ul>
        <ul class="row">
          <li class="two columns"><i class="icon-flow-cascade"></i> flow-cascade</li>
          <li class="two columns"><i class="icon-flow-branch"></i> flow-branch</li>
          <li class="two columns"><i class="icon-flow-tree"></i> flow-tree</li>
          <li class="two columns"><i class="icon-flow-line"></i> flow-line</li>
          <li class="two columns"><i class="icon-flow-parallel"></i> flow-parallel</li>
          <li class="two columns"><i class="icon-rocket"></i> rocket</li>
        </ul>

        <ul class="row">
          <li class="two columns"><i class="icon-gauge"></i> gauge</li>
          <li class="two columns"><i class="icon-traffic-cone"></i> traffic-cone</li>
          <li class="two columns"><i class="icon-cc"></i> cc</li>
          <li class="two columns"><i class="icon-cc-by"></i> cc-by</li>
          <li class="two columns"><i class="icon-cc-nc"></i> cc-nc</li>
          <li class="two columns"><i class="icon-cc-nc-eu"></i> cc-nc-eu</li>
        </ul>
        <ul class="row">
          <li class="two columns"><i class="icon-cc-nc-jp"></i> cc-nc-jp</li>
          <li class="two columns"><i class="icon-cc-sa"></i> cc-sa</li>
          <li class="two columns"><i class="icon-cc-nd"></i> cc-nd</li>
          <li class="two columns"><i class="icon-cc-pd"></i> cc-pd</li>
          <li class="two columns"><i class="icon-cc-zero"></i> cc-zero</li>
          <li class="two columns"><i class="icon-cc-share"></i> cc-share</li>
        </ul>
        <ul class="row">
          <li class="two columns"><i class="icon-cc-remix"></i> cc-remix</li>
          <li class="two columns"><i class="icon-github"></i> github</li>
          <li class="two columns"><i class="icon-github-circled"></i> github-circled</li>
          <li class="two columns"><i class="icon-flickr"></i> flickr</li>
          <li class="two columns"><i class="icon-flickr-circled"></i> flickr-circled</li>
          <li class="two columns"><i class="icon-vimeo"></i> vimeo</li>
        </ul>
        <ul class="row">
          <li class="two columns"><i class="icon-vimeo-circled"></i> vimeo-circled</li>
          <li class="two columns"><i class="icon-gplus"></i> gplus</li>
          <li class="two columns"><i class="icon-gplus-circled"></i> gplus-circled</li>
          <li class="two columns"><i class="icon-pinterest"></i> pinterest</li>
          <li class="two columns"><i class="icon-pinterest-circled"></i> <span class="smallify">pinterest-circled</span></li>
          <li class="two columns"><i class="icon-tumblr"></i> tumblr</li>
        </ul>
        <ul class="row">
          <li class="two columns"><i class="icon-tumblr-circled"></i> <span class="smallify">tumblr-circled</span></li>
          <li class="two columns"><i class="icon-linkedin"></i> linkedin</li>
          <li class="two columns"><i class="icon-linkedin-circled"></i> <span class="smallify">linkedin-circled</span></li>
          <li class="two columns"><i class="icon-dribbble"></i> dribbble</li>
          <li class="two columns"><i class="icon-dribbble-circled"></i> <span class="smallify">dribbble-circled</span></li>
          <li class="two columns"><i class="icon-facebook"></i> facebook</li>
        </ul>
        <ul class="row">
          <li class="two columns"><i class="icon-facebook-circled"></i> <span class="smallify">facebook-circled</span></li>
          <li class="two columns"><i class="icon-facebook-squared"></i> <span style="font-size: 12px">facebook-squared</span></li>
          <li class="two columns"><i class="icon-twitter"></i> twitter</li>
          <li class="two columns"><i class="icon-twitter-circled"></i> twitter-circled</li>
          <li class="two columns"><i class="icon-lastfm"></i> lastfm</li>
          <li class="two columns"><i class="icon-lastfm-circled"></i> lastfm-circled</li>
        </ul>
        <ul class="row">
          <li class="two columns"><i class="icon-rdio"></i> rdio</li>
          <li class="two columns"><i class="icon-rdio-circled"></i> rdio-circled</li>
          <li class="two columns"><i class="icon-spotify"></i> spotify</li>
          <li class="two columns"><i class="icon-spotify-circled"></i> spotify-circled</li>
          <li class="two columns"><i class="icon-instagram"></i> instagram</li>
          <li class="two columns"><i class="icon-qq"></i> qq</li>
        </ul>
        <ul class="row">
          <li class="two columns"><i class="icon-dropbox"></i> dropbox</li>
          <li class="two columns"><i class="icon-evernote"></i> evernote</li>
          <li class="two columns"><i class="icon-skype"></i> skype</li>
          <li class="two columns"><i class="icon-skype-circled"></i> skype-circled</li>
          <li class="two columns"><i class="icon-flattr"></i> flattr</li>
          <li class="two columns"><i class="icon-renren"></i> renren</li>
        </ul>
        <ul class="row">
          <li class="two columns"><i class="icon-sina-weibo"></i> sina-weibo</li>
          <li class="two columns"><i class="icon-paypal"></i> paypal</li>
          <li class="two columns"><i class="icon-picasa"></i> picasa</li>
          <li class="two columns"><i class="icon-soundcloud"></i> soundcloud</li>
          <li class="two columns"><i class="icon-mixi"></i> mixi</li>
          <li class="two columns"><i class="icon-behance"></i> behance</li>
        </ul>
        <ul class="row">
          <li class="two columns"><i class="icon-google-circles"></i> google-circles</li>
          <li class="two columns"><i class="icon-vkontakte"></i> vkontakte</li>
          <li class="two columns"><i class="icon-smashing"></i> smashing</li>
          <li class="two columns"><i class="icon-sweden"></i> sweden</li>
          <li class="two columns"><i class="icon-db-shape"></i> db-shape</li>
          <li class="two columns"><i class="icon-logo-db"></i> logo-db</li>
        </ul>

      </div>
    </div>

  </div>

  <!-- Grab Google CDN's jQuery, fall back to local if offline -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.9.1.min.js"><\/script>')</script>

  <!--
  Include gumby.js followed by UI modules.
  Or concatenate and minify into a single file
  <script src="js/libs/gumby.js"></script>
  <script src="js/libs/ui/gumby.retina.js"></script>
  <script src="js/libs/ui/gumby.fixed.js"></script>
  <script src="js/libs/ui/gumby.skiplink.js"></script>
  <script src="js/libs/ui/gumby.toggleswitch.js"></script>
  <script src="js/libs/ui/gumby.checkbox.js"></script>
  <script src="js/libs/ui/gumby.radiobtn.js"></script>
  <script src="js/libs/ui/gumby.tabs.js"></script>
  <script src="js/libs/ui/jquery.validation.js"></script>
  <script src="js/libs/gumby.init.js"></script>
  -->
  <script src="js/libs/gumby.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Change UA-XXXXX-X to be your site's ID -->
  <!--<script>
    window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
    Modernizr.load({
      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
  </script>-->

  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->

  </body>
</html>
