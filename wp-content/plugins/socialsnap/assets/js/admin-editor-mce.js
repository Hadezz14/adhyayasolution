tinymce.create("tinymce.plugins.socialsnap",{init:function(n,o){n.addButton("ss_shortcode_generator",{title:"Social Snap Shortcode Generator",icon:"socialsnap-menu-icon",onPostRender:function(){var n=document.querySelector(".mce-i-socialsnap-menu-icon");null!==n&&(n.innerHTML='<svg class="ss-svg-icon" width="30" height="32" viewBox="0 0 30 32" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M22.293 0.146l7.602 4.172c0.386 0.201 0.386 0.541 0 0.757l-16.688 9.147c-1.684 0.943-2.241 2.271-1.669 3.461 0 0.093 0 0.201-0.201 0.263-0.207 0.088-0.441 0.088-0.649 0l-10.399-5.702c-0.386-0.201-0.386-0.541 0-0.757l20.628-11.311c0.428-0.225 0.937-0.236 1.375-0.031zM7.892 31.854l-7.602-4.172c-0.386-0.201-0.386-0.541 0-0.757l16.688-9.147c1.684-0.943 2.241-2.271 1.669-3.461 0-0.093 0-0.201 0.201-0.263 0.207-0.088 0.442-0.088 0.649 0l10.399 5.702c0.386 0.201 0.386 0.541 0 0.757l-20.628 11.311c-0.428 0.225-0.937 0.237-1.375 0.031z"></path></svg>')}})},createControl:function(n,o){return null},getInfo:function(){return{longname:"Social Snap Shortcodes",author:"Social Snap",authorurl:"https://www.socialsnap.com/",infourl:"https://www.socialsnap.com/",version:"1.0"}}}),tinymce.PluginManager.add("socialsnap",tinymce.plugins.socialsnap);