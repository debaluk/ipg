function checkAll(e,t){"."!=e[0]&&(e="."+e),jQuery(e).removeAttr("checked"),jQuery(t).is(":checked")&&jQuery(e).click()}function clickableSafeRedirect(e,t,i){var a=e.target.tagName.toLowerCase(),n=e.target.parentNode.tagName.toLowerCase(),r=e.target.parentNode.parentNode.parentNode;return!jQuery(r).hasClass("collapsed")&&(("i"!==a||!jQuery(e.target).hasClass("ssl-required"))&&void("button"!=a&&"a"!=a&&"button"!=n&&"a"!=n&&(i?window.open(t):window.location.href=t)))}function popupWindow(e,t,i,a,n){var r=(screen.width-i)/2,s=(screen.height-a)/2;r<0&&(r=0),s<0&&(s=0);var o="height="+a+",";o+="width="+i+",",o+="top="+s+",",o+="left="+r+",",o+=n,win=window.open(e,t,o),win.window.focus()}function addRenewalToCart(e,t){jQuery("#domainRow"+e).attr("disabled","disabled"),jQuery("#domainRow"+e).find("select,button").attr("disabled","disabled"),jQuery(t).html('<span class="glyphicon glyphicon-shopping-cart"></span> Adding...');var i=jQuery("#renewalPeriod"+e).val();WHMCS.http.jqClient.post("clientarea.php","addRenewalToCart=1&token="+csrfToken+"&renewID="+e+"&period="+i,function(e){jQuery("#cartItemCount").html(1*jQuery("#cartItemCount").html()+1),jQuery(t).html('<span class="glyphicon glyphicon-shopping-cart"></span> Added'),jQuery("#btnCheckout").fadeIn()})}function selectChangeNavigate(e){window.location.href=$(e).val()}function extraTicketAttachment(){jQuery("#fileuploads").append('<p><div class="input-group input-group-sm"><span class="input-group-btn"><span class="btn btn-primary btn-file"><span class="glyphicon glyphicon-folder-open"></span> <input type="file" name="attachments[]" multiple=""></span></span><input type="text" class="form-control" readonly=""></div></p>');$(document).ready(function(){$(".btn-file :file").on("fileselect",function(e,t,n){var i=$(this).parents(".input-group").find(":text"),l=t>1?t+" files selected":n;i.length?i.val(l):l&&alert(l)})});}function getStats(e){WHMCS.http.jqClient.post("serverstatus.php","getstats=1&num="+e,function(t){jQuery("#load"+e).html(t.load),jQuery("#uptime"+e).html(t.uptime)},"json")}function checkPort(e,t){WHMCS.http.jqClient.post("serverstatus.php","ping=1&num="+e+"&port="+t,function(i){jQuery("#port"+t+"_"+e).html(i)})}function getticketsuggestions(){currentcheckcontent=jQuery("#message").val(),currentcheckcontent!=lastcheckcontent&&""!=currentcheckcontent&&(WHMCS.http.jqClient.post("submitticket.php",{action:"getkbarticles",text:currentcheckcontent},function(e){e&&(jQuery("#searchresults").html(e),jQuery("#searchresults").hide().removeClass("hidden").slideDown())}),lastcheckcontent=currentcheckcontent),setTimeout("getticketsuggestions();",3e3)}function refreshCustomFields(e){jQuery("#customFieldsContainer").load("submitticket.php",{action:"getcustomfields",deptid:$(e).val()})}function autoSubmitFormByContainer(e){"undefined"!=typeof noAutoSubmit&&!1!==noAutoSubmit||jQuery("#"+e).find("form:first").submit()}function useDefaultWhois(e){jQuery("."+e.substr(0,e.length-1)+"customwhois").attr("disabled",!0),jQuery("."+e.substr(0,e.length-1)+"defaultwhois").attr("disabled",!1),jQuery("#"+e.substr(0,e.length-1)+"1").attr("checked","checked")}function useCustomWhois(e){jQuery("."+e.substr(0,e.length-1)+"customwhois").attr("disabled",!1),jQuery("."+e.substr(0,e.length-1)+"defaultwhois").attr("disabled",!0),jQuery("#"+e.substr(0,e.length-1)+"2").attr("checked","checked")}function showNewBillingAddressFields(){jQuery("#newBillingAddress").slideDown()}function hideNewBillingAddressFields(){jQuery("#newBillingAddress").slideUp()}function showNewCardInputFields(){jQuery(".cc-details").hasClass("hidden")&&jQuery(".cc-details").hide().removeClass("hidden"),jQuery(".cc-details").slideDown(),jQuery("#billingAddressChoice").slideDown().find('input[name="billingcontact"]').first().iCheck("check")}function hideNewCardInputFields(){hideNewBillingAddressFields(),jQuery(".cc-details").slideUp(),jQuery("#billingAddressChoice").slideUp();var e=jQuery('input[name="ccinfo"]:checked'),t=jQuery(e).data("billing-contact-id"),i=jQuery('.billing-contact-info[data-billing-contact-id="'+t+'"]');i.length&&(jQuery(".billing-contact-info").hide(),jQuery(i).show())}var lastTicketMsg;function getTicketSuggestions(){var e=jQuery("#inputMessage").val();e!=lastTicketMsg&&""!=e&&(WHMCS.http.jqClient.post("submitticket.php",{action:"getkbarticles",text:e},function(e){e&&(jQuery("#autoAnswerSuggestions").html(e),jQuery("#autoAnswerSuggestions").is(":visible")||jQuery("#autoAnswerSuggestions").hide().removeClass("hidden").slideDown())}),lastTicketMsg=e),setTimeout("getTicketSuggestions()",3e3)}function smoothScroll(e){$("html, body").animate({scrollTop:$(e).offset().top},500)}function irtpSubmit(){allowSubmit=!0;var e=0,t=jQuery("#modalIrtpOptOut"),i=jQuery("#modalReason"),a=jQuery("#irtpOptOut"),n=jQuery("#irtpOptOutReason");t.is(":checked")&&(e=1),a.val(e),n.val(i.val()),jQuery("#frmDomainContactModification").submit()}jQuery(document).ready(function(){if(jQuery("#languageChooser").popover({container:"body",placement:"bottom",template:'<div class="popover language-popover" role="tooltip"><div class="arrow"></div><div class="popover-content"></div></div>',html:!0,content:function(){return jQuery("#languageChooserContent").html()}}),jQuery("#loginOrRegister").popover({container:"body",placement:"bottom",template:'<div class="popover login-popover" role="tooltip"><div class="arrow"></div><div class="popover-content"></div></div>',html:!0,content:function(){return jQuery("#loginOrRegisterContent").html()}}),jQuery("#accountNotifications").popover({container:"body",placement:"bottom",template:'<div class="popover popover-user-notifications" role="tooltip"><div class="arrow"></div><div class="popover-inner"><h3 class="popover-title"></h3><div class="popover-content"><p></p></div></div></div>',html:!0,content:function(){return jQuery("#accountNotificationsContent").html()}}),jQuery(".panel-sidebar .truncate").each(function(){jQuery(this).attr("title",jQuery(this).text()).attr("data-toggle","tooltip").attr("data-placement","bottom")}),jQuery('[data-toggle="popover"]').popover({html:!0}),jQuery(function(e){e("body").tooltip({selector:'[data-toggle="tooltip"]'})}),jQuery("body").on("click",function(e){jQuery('[data-toggle="popover"]').each(function(){jQuery(this).is(e.target)||0!==jQuery(this).has(e.target).length||0!==jQuery(".popover").has(e.target).length||jQuery(this).popover("hide")})}),jQuery(".list-group-tab-nav a").click(function(){if(jQuery(this).hasClass("disabled"))return!1;jQuery(".list-group-tab-nav a").removeClass("active"),jQuery(this).addClass("active");var e=this.href.split("#")[1];e&&(window.location.hash="#"+e)}),jQuery(".panel-minimise").click(function(e){e.preventDefault(),jQuery(this).hasClass("minimised")?(jQuery(this).parents(".panel").find(".panel-body, .list-group").slideDown(),jQuery(this).removeClass("minimised")):(jQuery(this).parents(".panel").find(".panel-body, .list-group").slideUp(),jQuery(this).addClass("minimised"))}),jQuery(".container").width()<=720&&(jQuery(".panel-sidebar").find(".panel-body, .list-group").hide(),jQuery(".panel-sidebar").find(".panel-minimise").addClass("minimised")),""!=jQuery(location).attr("hash").substr(1)){var e=jQuery(location).attr("hash");jQuery(".tab-pane").removeClass("active"),jQuery(e).removeClass("fade").addClass("active"),jQuery(".list-group-tab-nav a").removeClass("active"),jQuery('a[href="'+e+'"]').addClass("active"),setTimeout(function(){window.scrollTo(0,0)},1)}jQuery.prototype.bootstrapSwitch&&jQuery(".toggle-switch-success").bootstrapSwitch({onColor:"success"}),jQuery(".panel-collapsable .panel-heading").click(function(e){var t=jQuery(this);t.parents(".panel").hasClass("panel-collapsed")?(t.parents(".panel").removeClass("panel-collapsed").find(".panel-body").slideDown(),t.find(".collapse-icon i").removeClass("fa-plus").addClass("fa-minus")):(t.parents(".panel").addClass("panel-collapsed").find(".panel-body").slideUp(),t.find(".collapse-icon i").removeClass("fa-minus").addClass("fa-plus"))}),"#frmLogin".length>0&&jQuery("#frmLogin input:text:visible:first").focus(),"#twofaactivation".length>0&&jQuery("#twofaactivation input:text:visible:first,#twofaactivation input:password:visible:first").focus(),jQuery("#inputSubaccountActivate").click(function(){null!=jQuery("#inputSubaccountActivate:checked").val()?jQuery("#subacct-container").removeClass("hidden"):jQuery("#subacct-container").addClass("hidden")}),jQuery(".setBulkAction").click(function(e){e.preventDefault();var t=jQuery(this).attr("id").replace("Link",""),i=jQuery("#domainForm");if("renewDomains"===t)i.attr("action",WHMCS.utils.getRouteUrl("/cart/domain/renew"));else{if(0!==jQuery("#"+t).length){var a=i.attr("action");i.attr("action",a+"#"+t)}jQuery("#bulkaction").val(t)}i.submit()}),jQuery(".stopEventBubble").click(function(e){e.stopPropagation()}),jQuery(".tabControlLink").on("click",function(e){e.preventDefault();var t=jQuery(this).attr("href");jQuery("a[href='/"+t+"']").click()}),jQuery(document).on("click",".delete-cc-email",function(){var e=jQuery(this),t=e.data("email"),i=jQuery("#divCcEmailFeedback");i.is(":visible")&&i.slideUp("fast"),WHMCS.http.jqClient.jsonPost({url:window.location.href,data:{action:"delete",email:t,token:csrfToken},success:function(t){t.success&&(e.closest(".ticket-cc-email").parent("div").slideUp("fast").remove(),i.slideUp("fast").removeClass("alert-danger hidden").addClass("alert-success").html(t.message).slideDown("fast"))},error:function(e){e&&i.slideUp("fast").removeClass("alert-success hidden").addClass("alert-danger").html(e).slideDown("fast")}})}).on("submit","#frmAddCcEmail",function(e){e.preventDefault();var t=jQuery(this),i=jQuery("#ccCloneRow").clone().removeAttr("id"),a=jQuery("#inputAddCcEmail"),n=jQuery("#divCcEmailFeedback");n.is(":visible")&&n.slideUp("fast"),WHMCS.http.jqClient.jsonPost({url:t.attr("action"),data:t.serialize(),success:function(e){e.success&&(i.find("span.email").html(a.val()).find("button").data("email",a.val()).end(),i.removeClass("hidden").appendTo(jQuery("#sidebarTicketCc").find(".list-group")),a.val(""),n.slideUp("fast").removeClass("alert-danger hidden").addClass("alert-success").html(e.message).slideDown("fast"))},error:function(e){e&&n.slideUp("fast").removeClass("alert-success hidden").addClass("alert-danger").html(e).slideDown("fast")}})}),jQuery(".ticket-reply .rating span.star").click(function(e){window.location="viewticket.php?tid="+jQuery(this).parent(".rating").attr("ticketid")+"&c="+jQuery(this).parent(".rating").attr("ticketkey")+"&rating=rate"+jQuery(this).parent(".rating").attr("ticketreplyid")+"_"+jQuery(this).attr("rate")}),jQuery("a.autoLinked").click(function(e){e.preventDefault();var t=window.open();t.opener=null,t.location=e.target.href}),jQuery("#inputAllowSso").on("switchChange.bootstrapSwitch",function(e,t){t?(jQuery("#ssoStatusTextEnabled").removeClass("hidden").show(),jQuery("#ssoStatusTextDisabled").hide()):(jQuery("#ssoStatusTextDisabled").removeClass("hidden").show(),jQuery("#ssoStatusTextEnabled").hide()),WHMCS.http.jqClient.post("clientarea.php",jQuery("#frmSingleSignOn").serialize())}),jQuery(".btn-service-sso").on("click",function(e){e.preventDefault();var t=jQuery(this),i=t.parents("form");0==i.length&&(i=t.find("form")),i.hasClass("disabled")||(t.find(".loading").removeClass("hidden").show().end().attr("disabled","disabled"),WHMCS.http.jqClient.post(window.location.href,i.serialize(),function(e){t.find(".loading").hide().end().removeAttr("disabled"),i.find(".login-feedback").html(""),e.error&&i.find(".login-feedback").html(e.error),void 0!==e.redirect&&"window|"===e.redirect.substr(0,7)&&window.open(e.redirect.substr(7),"_blank")},"json"))}),jQuery(".btn-sidebar-form-submit").on("click",function(e){e.preventDefault(),jQuery(this).find(".loading").removeClass("hidden").show().end().attr("disabled","disabled");var t=jQuery(this).parents("form");0==t.length&&(t=jQuery(this).find("form")),0!==t.length&&!1===t.hasClass("disabled")?t.submit():jQuery(this).find(".loading").hide().end().removeAttr("disabled")}),jQuery(".email-verification .btn.close").click(function(e){e.preventDefault(),WHMCS.http.jqClient.post("clientarea.php","action=dismiss-email-banner&token="+csrfToken),jQuery(".email-verification").hide()}),jQuery(".back-to-top").click(function(e){e.preventDefault(),jQuery("body,html").animate({scrollTop:0},500)}),jQuery(".choose-language").click(function(e){e.preventDefault()}),jQuery(".copy-to-clipboard").click(WHMCS.ui.clipboard.copy),jQuery(".generate-password").click(function(e){jQuery("#frmGeneratePassword").submit(),jQuery("#modalGeneratePassword").data("targetfields",jQuery(this).data("targetfields")).modal("show")}),jQuery("#frmGeneratePassword").submit(function(e){e.preventDefault();var t=parseInt(jQuery("#inputGeneratePasswordLength").val(),10);t<8||t>64?jQuery("#generatePasswordLengthError").removeClass("hidden").show():jQuery("#inputGeneratePasswordOutput").val(WHMCS.utils.generatePassword(t))}),jQuery("#btnGeneratePasswordInsert").click(WHMCS.ui.clipboard.copy).click(function(e){jQuery(this).closest(".modal").modal("hide");var t=jQuery(this).closest(".modal").data("targetfields");t=t.split(",");for(var i=0;i<t.length;i++)jQuery("#"+t[i]).val(jQuery("#inputGeneratePasswordOutput").val()).trigger("keyup")});var t=0,i=0;function a(e,t,i){i=i||saving;var a=[],n=0,r=0;if(e&&(a=e.match(/[^\s]+/g),r=e.split(/\\r\\n|\\r|\\n/).length),a)for(var s=0;s<a.length;s++)a[s].charCodeAt(0)>=19968?n+=a[s].length:n+=1;return'<div class="small-font">lines: '+r+"&nbsp;&nbsp;&nbsp;words: "+n+(t?'&nbsp;&nbsp;&nbsp;<span class="markdown-save">'+i+"</span>":"")+"</div>"}function n(){i>=0&&(0==i&&jQuery("span.markdown-save").html(saved),i--,setTimeout(n,1e3))}jQuery(".markdown-editor").each(function(e){t++;var r=jQuery(this).data("auto-save-name"),s=jQuery(this).attr("id")+"-footer";void 0===r&&(r="client_area"),window["clientMDE"+t.toString()]=jQuery(this).markdown({footer:'<div id="'+s+'" class="markdown-editor-status"></div>',autofocus:!1,savable:!1,resize:"vertical",iconlibrary:"glyph",language:locale,onShow:function(e){var t="",i=!1;"undefined"!=typeof Storage&&(i=!0,(t=localStorage.getItem(r))&&void 0!==t&&e.setContent(t)),jQuery("#"+s).html(a(t,i,saved))},onChange:function(e){var t=e.getContent(),o=!1;"undefined"!=typeof Storage&&(i=3,o=!0,localStorage.setItem(r,t),n()),jQuery("#"+s).html(a(t,o))},onPreview:function(e){var t,i=e.getContent();return jQuery.ajax({url:"clientarea.php",async:!1,data:{token:csrfToken,action:"parseMarkdown",content:i},dataType:"json",success:function(e){t=e}}),t.body?t.body:""},additionalButtons:[[{name:"groupCustom",data:[{name:"cmdHelp",title:"Help",hotkey:"Ctrl+F1",btnClass:"btn open-modal",icon:{glyph:"fas fa-question-circle",fa:"fa fa-question-circle","fa-3":"icon-question-sign"},callback:function(e){e.$editor.removeClass("md-fullscreen-mode")}}]}]],hiddenButtons:["cmdImage"]}),jQuery('button[data-handler="bootstrap-markdown-cmdHelp"]').attr("data-modal-title",markdownGuide).attr("href","submitticket.php?action=markdown"),jQuery(this).closest("form").bind({submit:function(){"undefined"!=typeof Storage&&localStorage.removeItem(r)}})}),jQuery("#btnResendVerificationEmail").click(function(){WHMCS.http.jqClient.post("clientarea.php",{token:csrfToken,action:"resendVerificationEmail"}).done(function(e){jQuery("#btnResendVerificationEmail").html("Email Sent").prop("disabled",!0)})});var r=jQuery("input[name=2fasetup]").parent("form");r.submit(function(e){e.preventDefault(),openModal(r.attr("action"),r.serialize(),"Loading...")}),$.fn.setInputError=function(e){return this.parents(".form-group").addClass("has-error").find(".field-error-msg").text(e),this},jQuery.fn.showInputError=function(){return this.parents(".form-group").addClass("has-error").find(".field-error-msg").show(),this},jQuery("#frmPayment").on("submit",function(){var e=jQuery("#btnSubmit");e.find("span").toggleClass("hidden"),e.prop("disabled",!0).addClass("disabled")}),jQuery(".btn-resend-approver-email").click(function(){WHMCS.http.jqClient.post(jQuery(this).data("url"),{addonId:jQuery(this).data("addonid"),serviceId:jQuery(this).data("serviceid")},function(e){1==e.success?jQuery(".alert-table-ssl-manage").addClass("alert-success").text("Approver Email Resent").removeClass("hidden"):jQuery(".alert-table-ssl-manage").addClass("alert-danger").text("Error: "+e.message).removeClass("hidden")})}),jQuery(".tld-filters a").click(function(e){e.preventDefault();var t=jQuery(".tld-row.no-tlds");jQuery(this).hasClass("label-success")?jQuery(this).removeClass("label-success"):jQuery(this).addClass("label-success"),t.is(":visible")&&t.hide(),jQuery(".tld-row").removeClass("filtered-row"),jQuery(".tld-filters a.label-success").each(function(e){var t=jQuery(this).data("category");jQuery('.tld-row[data-category*="'+t+'"]').addClass("filtered-row")}),jQuery(".filtered-row:even").removeClass("highlighted"),jQuery(".filtered-row:odd").addClass("highlighted");var i=jQuery('.tld-row:not(".filtered-row")');i.fadeOut("fast"),i.promise().done(function(){0===jQuery(".filtered-row").length?t.show():jQuery(".tld-row.filtered-row").show()})}),jQuery(".filtered-row:even").removeClass("highlighted"),jQuery(".filtered-row:odd").addClass("highlighted"),WHMCS.ui.dataTable.register(),WHMCS.ui.confirmation.register(),WHMCS.ui.jsonForm.initAll(),jQuery("#frmReply").submit(function(e){jQuery("#frmReply").find('input[type="submit"]').addClass("disabled").prop("disabled",!0)}),jQuery("#frmDomainContactModification").on("submit",function(){if(!allowSubmit){var e=!1;if(jQuery(".irtp-field").each(function(){jQuery(this).val()!==jQuery(this).data("original-value")&&(e=!0)}),e)return jQuery("#modalIRTPConfirmation").modal("show"),!1}return!0}),jQuery(".ssl-state.ssl-sync").each(function(){var e=jQuery(this);WHMCS.http.jqClient.post(WHMCS.utils.getRouteUrl("/domain/ssl-check"),{type:e.parent("td").data("type"),domain:e.parent("td").data("domain"),token:csrfToken},function(t){t.invalid?e.hide():e.replaceWith('<img src="'+t.image+'" data-toggle="tooltip" title="'+t.tooltip+'" class="'+t.class+'">')})}),jQuery(document).on("click",".ssl-state.ssl-inactive",function(e){e.preventDefault(),window.location.href=WHMCS.utils.getRouteUrl("/ssl-purchase")}),WHMCS.recaptcha.register();var s=jQuery("#divDynamicRecaptcha"),o=jQuery(s).length>0,l=o&&"invisible"===jQuery(s).data("size"),d=jQuery("#frmDomainHomepage");jQuery(d).find("#btnTransfer").click(function(){jQuery(d).find('input[name="transfer"]').val("1")}),o&&!l&&jQuery("section#home-banner").addClass("with-recaptcha"),jQuery(".domainchecker-homepage-captcha").length&&!l&&jQuery(d).submit(function(e){jQuery(d).find('input[name="domain"]');var t=jQuery("#divDynamicRecaptcha"),i=jQuery("#g-recaptcha-response"),a=jQuery("#inputCaptcha");return i.length&&!i.val()?(t.tooltip("show"),void e.preventDefault()):a.length&&!a.val()?(a.tooltip("show"),void e.preventDefault()):void 0}),$(".icheck-button").iCheck({inheritID:!0,checkboxClass:"icheckbox_square-blue",radioClass:"iradio_square-blue",increaseArea:"20%"}),jQuery("#inputNoStore").on("switchChange.bootstrapSwitch",function(e,t){var i=jQuery("#inputDescription");t||i.prop("disabled",!0).addClass("disabled"),t&&i.removeClass("disabled").prop("disabled",!1)}),jQuery(".btn-nav-toggle-responsive").click(function(){jQuery(".left-sidebar").toggleClass("show-fullsidebar")})});