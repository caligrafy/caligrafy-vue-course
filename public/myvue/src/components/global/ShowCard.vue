<template>
    <div>
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
    </div>	
</template>

<script>
export default {
    name: 'show-card',
    props: ['project']

};
</script>