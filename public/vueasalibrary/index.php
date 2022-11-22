<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type", content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1 maximum-scale=1">
        <meta name='apple-mobile-web-app-capable' content='yes'>
        <meta name='apple-mobile-web-app-status-bar-style' content='black'>
        <title>Index Page with Vue.js</title>

        <!-- Stylesheet and head scripts go here -->
        <link rel="shortcut icon" href="<?php echo scripts('favicon'); ?>" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" href="<?php echo scripts('css'); ?>" />
        <link rel="stylesheet" href="<?php echo scripts('bootstrap_css'); ?>" />
        <link rel="stylesheet" href="<?php echo session('public').'css/theme.css';?>">
        
    </head>
    
    <body>
        <!-- Beginning of the app -->
        <div id="app" v-cloak>
            <div class="spacer-4"></div>
            <div class="wrapper bounded-large content-section">
                <template v-for="project in projects">
                    <div class="col-sm-6 col-md-4">
                        <div class="card animated zoomIn color0 equally-spaced-1 dropshadow">
                            <div class="spacer-2"></div>
                            <h2 class="medium-text semibold textcolor5 reset-margin">{{ project.title }}</h2>
                            <div class="spacer-1"></div>
                            <div class="wrapper reset-margin">
                                <p class="textcolor5 default-text block-with-text">{{ project.description }}</p>
                            </div>
                            <div class="spacer-3"></div>
                            <div class="small-text textcolor3">{{ project.modified_at }}</div>
                            <div class="spacer-1"></div>
                        </div>
                    </div>
                </template>
            </div>  
        </div>
		
		
		<!-- TEMPLATES FOR VUE COMPONENTS -->
	
		<!--
		<script type='text/x-template' id='template'>
			<div>
				<!-- code here
			</div>	
		</script>
		-->
        
        <!-- Initialization scripts -->
        <script src="https://unpkg.com/vue@3"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script src="<?php echo APP_SERVICE_ROOT.'app.js'; ?>"></script>
        <script>loadEnvironment(`<?php echo $env; ?>`);</script>
        <script> 
            /* Loading the app client framework
             * Any environment variables to be passed on from the server can take place in this here
             */
            loadVue({
                scripts: ['main']
             });
        </script>
        
        <!-- Additional scripts go here -->
        <script src="<?php echo scripts('bootstrap_jquery'); ?>"></script>
        <script src="<?php echo scripts('bootstrap_script'); ?>"></script>
        <script src="<?php echo scripts('script'); ?>"></script>
    </body>
</html>