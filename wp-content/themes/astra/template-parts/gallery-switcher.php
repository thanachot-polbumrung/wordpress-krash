<?php
/**
 * Template Name: Gallery Switcher Page
 */

get_header(); ?>

<div class="container mt-5">
    <div class="head" fullwidth>
        <h1>Reaper</h1>
    </div>
    <div class="row mb-4">
        <div style="blackground-color:withe" class="col-md-12 text-center">
            <button  id="changeImageButton" class="btn btn-primary me-2">
                <img src="https://static.wixstatic.com/media/b6b6d9_86b9048b5371442d88348eb56a975568~mv2.jpg/v1/fill/w_78,h_78,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/Black-Aqua_edited.jpg"/>
            </button>
            <button id="changeImageButton2" class="btn btn-secondary">
                <img src="https://static.wixstatic.com/media/b6b6d9_882c7a4e3f0f41f5b9320295e439ccb3~mv2.jpg/v1/fill/w_78,h_78,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/Charcoal---Orange_edited.jpg"/>
            </button>
            <div id="tooltipButton" class="tooltip-text mt-2" style="display: none;"></div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <div id="myGrindGallery" class="row gallery-container"></div>
        </div>
    </div>
</div>

<style>
    .head{
        background-color:#d2ff00;
        width: 100%;
        align-self: center;
        justify-self: center;
    }

    .gallery-item {
        margin-bottom: 20px;
        transition: all 0.3s ease;
    }
    
    .gallery-item img {
        width: 20%;
        height: auto;
        object-fit: cover;
    }
    
    .tooltip-text {
        background-color: rgba(0, 0, 0, 0.7);
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 14px;
    }
    .galleryOne{
        width: 10%;
        height:10%;
    }
</style>

<script>
jQuery(document).ready(function($) {
    
    const galleryOne = [
        { src: "https://static.wixstatic.com/media/a455ca_0c8f542887a348ff9d65e4c24198a04d~mv2.png", type: "image" },
        // { src: "https://static.wixstatic.com/media/a455ca_35be56f362ed4b0cb988f418f8b415fb~mv2.png", type: "image" },
        // { src: "https://static.wixstatic.com/media/a455ca_fa2d06fb75664a7dbe0067e8108e7a13~mv2.png", type: "image" },
        // { src: "https://static.wixstatic.com/media/a455ca_074fa9c6e9764b6e8ceb9829667778ce~mv2.png", type: "image" },
        // { src: "https://static.wixstatic.com/media/a455ca_a6523da3354b4729a1b081da4d4edb83~mv2.png", type: "image" },
        // { src: "https://static.wixstatic.com/media/a455ca_164865d2bde44b62bb92f220bf9290fb~mv2.png", type: "image" },
    ];

    const galleryTwo = [
        { src: "https://static.wixstatic.com/media/a455ca_f7d910fe33d3421089e4a50ce8748b5c~mv2.png", type: "image" },
        // { src: "https://static.wixstatic.com/media/a455ca_aa551f452f374cc79883591d4cfdc7d4~mv2.png", type: "image" },
        // { src: "https://static.wixstatic.com/media/a455ca_3c583978605747df9b02e9d8cd883570~mv2.png", type: "image" },
        // { src: "https://static.wixstatic.com/media/a455ca_7f4f31e3942540c58affdac71abf7397~mv2.png", type: "image" },
        // { src: "https://static.wixstatic.com/media/a455ca_33f1470791734531acc9bb7de9f2b8d2~mv2.png", type: "image" },
        // { src: "https://static.wixstatic.com/media/a455ca_4d7b90e502f847398df27e97deccd588~mv2.png", type: "image" },
    ];

    let currentGallery = galleryOne; 
  
    function renderGallery(galleryItems) {
        $('#myGrindGallery').empty();
        
        $.each(galleryItems, function(index, item) {
            const galleryItem = `
                <div class="col-lg-4 col-md-6 col-sm-12 gallery-item">
                    <img src="${item.src}" alt="Gallery Image ${index + 1}" class="img-fluid">
                </div>
            `;
            $('#myGrindGallery').append(galleryItem);
        });
    }

    function changeToGalleryOne() {
        currentGallery = galleryOne;
        renderGallery(currentGallery);
    }

    function changeToGalleryTwo() {
        currentGallery = galleryTwo;
        renderGallery(currentGallery);
    }

    function isDesktop() {
        return window.innerWidth >= 992;
    }

    function setupTooltip(buttonId, tooltipText) {
        $(buttonId).mouseenter(function() {
            $('#tooltipButton').text(tooltipText);
            $('#tooltipButton').show();
        });
        
        $(buttonId).mouseleave(function() {
            $('#tooltipButton').hide();
        });
    }

    renderGallery(currentGallery);

    $('#changeImageButton').click(changeToGalleryOne);
    $('#changeImageButton2').click(changeToGalleryTwo);

    if (isDesktop()) {
        $('#tooltipButton').hide();
        setupTooltip('#changeImageButton', "Black-Aqua");
        setupTooltip('#changeImageButton2', "Charcoal-Orange");
    }
});
</script>

<?php get_footer(); ?>