<style>
    #contact input,
    textarea {
        width: 100%;
        display: block;
        padding: 10px;
        margin-top: 20px;
        background-color: #e2e2e2;
        border-radius: 4px;
        color: black;
        transition: all 0.2s;
        border: 0px;
    }
    
    #contact input:focus,
    textarea:focus {
        -webkit-box-shadow: 0px 0px 10px 3px rgba(47, 173, 255, 1);
        -moz-box-shadow: 0px 0px 13px 3px rgba(47, 173, 255, 1);
        box-shadow: 0px 0px 13px 3px rgba(47, 173, 255, 1);
        background-color: #f6f6f6;
    }
    
    #contact input.wpcf7-submit {
        font-size: 14px;
        cursor: pointer;
        background-color: inherit;
        color: #666666;
        padding: 12px 20px;
        border: 1px solid #666666;
        border-radius: 5px;
        transition: all 0.3s;
        width: auto;
        display: inline-block;
    }
    
    #contact input.wpcf7-submit:hover {
        background-color: #ff8000;
        color: white;
        border-color: #ff8000;
    }
    
    img.ajax-loader {
        display: inline-block;
        width: 25px;
        margin-left: 20px !important;
    }
    
    div.wpcf7-response-output {
        border: none;
        font-size: 16px;
        font-family: inherit;
    }
    
    span.wpcf7-not-valid-tip {
        margin-top: 5px;
        font-size: 14px;
    }
</style>
<?php the_content(); ?>