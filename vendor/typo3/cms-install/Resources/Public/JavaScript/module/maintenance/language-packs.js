/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */
import"bootstrap";import $ from"jquery";import{AbstractInteractableModule}from"@typo3/install/module/abstract-interactable-module.js";import AjaxRequest from"@typo3/core/ajax/ajax-request.js";import SecurityUtility from"@typo3/core/security-utility.js";import FlashMessage from"@typo3/install/renderable/flash-message.js";import InfoBox from"@typo3/install/renderable/info-box.js";import ProgressBar from"@typo3/install/renderable/progress-bar.js";import Severity from"@typo3/install/renderable/severity.js";import Router from"@typo3/install/router.js";class LanguagePacks extends AbstractInteractableModule{constructor(){super(...arguments),this.selectorOutputContainer=".t3js-languagePacks-output",this.selectorContentContainer=".t3js-languagePacks-mainContent",this.selectorActivateLanguage=".t3js-languagePacks-activateLanguage",this.selectorActivateLanguageIcon="#t3js-languagePacks-activate-icon",this.selectorAddLanguageToggle=".t3js-languagePacks-addLanguage-toggle",this.selectorLanguageInactive=".t3js-languagePacks-inactive",this.selectorDeactivateLanguage=".t3js-languagePacks-deactivateLanguage",this.selectorDeactivateLanguageIcon="#t3js-languagePacks-deactivate-icon",this.selectorUpdate=".t3js-languagePacks-update",this.selectorLanguageUpdateIcon="#t3js-languagePacks-languageUpdate-icon",this.selectorNotifications=".t3js-languagePacks-notifications",this.activeLanguages=[],this.activeExtensions=[],this.packsUpdateDetails={toHandle:0,handled:0,updated:0,new:0,failed:0,skipped:0},this.notifications=[]}static pluralize(t,a="pack",e="s",s=0){return 1!==t&&1!==s?a+e:a}initialize(t){this.currentModal=t,this.getData(),t.on("click",this.selectorAddLanguageToggle,(()=>{t.find(this.selectorContentContainer+" "+this.selectorLanguageInactive).toggle()})),t.on("click",this.selectorActivateLanguage,(t=>{const a=$(t.target).closest(this.selectorActivateLanguage).data("iso");t.preventDefault(),this.activateLanguage(a)})),t.on("click",this.selectorDeactivateLanguage,(t=>{const a=$(t.target).closest(this.selectorDeactivateLanguage).data("iso");t.preventDefault(),this.deactivateLanguage(a)})),t.on("click",this.selectorUpdate,(t=>{const a=$(t.target).closest(this.selectorUpdate).data("iso"),e=$(t.target).closest(this.selectorUpdate).data("extension");t.preventDefault(),this.updatePacks(a,e)}))}getData(){const t=this.getModalBody();new AjaxRequest(Router.getUrl("languagePacksGetData")).get({cache:"no-cache"}).then((async a=>{const e=await a.resolve();if(!0===e.success){this.activeLanguages=e.activeLanguages,this.activeExtensions=e.activeExtensions,t.empty().append(e.html);const a=t.parent().find(this.selectorContentContainer);a.empty(),a.append(this.languageMatrixHtml(e)),a.append(this.extensionMatrixHtml(e))}else{const t=InfoBox.render(Severity.error,"Something went wrong","");this.addNotification(t)}this.renderNotifications()}),(a=>{Router.handleAjaxError(a,t)}))}activateLanguage(t){const a=this.getModalBody(),e=this.findInModal(this.selectorOutputContainer),s=ProgressBar.render(Severity.loading,"Loading...","");e.empty().append(s),this.getNotificationBox().empty(),new AjaxRequest(Router.getUrl()).post({install:{action:"languagePacksActivateLanguage",token:this.getModuleContent().data("language-packs-activate-language-token"),iso:t}}).then((async t=>{const a=await t.resolve();if(e.empty(),!0===a.success&&Array.isArray(a.status))a.status.forEach((t=>{const a=InfoBox.render(t.severity,t.title,t.message);this.addNotification(a)}));else{const t=FlashMessage.render(Severity.error,"Something went wrong","");this.addNotification(t)}this.getData()}),(t=>{Router.handleAjaxError(t,a)}))}deactivateLanguage(t){const a=this.getModalBody(),e=this.findInModal(this.selectorOutputContainer),s=ProgressBar.render(Severity.loading,"Loading...","");e.empty().append(s),this.getNotificationBox().empty(),new AjaxRequest(Router.getUrl()).post({install:{action:"languagePacksDeactivateLanguage",token:this.getModuleContent().data("language-packs-deactivate-language-token"),iso:t}}).then((async t=>{const a=await t.resolve();if(e.empty(),!0===a.success&&Array.isArray(a.status))a.status.forEach((t=>{const a=InfoBox.render(t.severity,t.title,t.message);this.addNotification(a)}));else{const t=FlashMessage.render(Severity.error,"Something went wrong","");this.addNotification(t)}this.getData()}),(t=>{Router.handleAjaxError(t,a)}))}updatePacks(t,a){const e=this.findInModal(this.selectorOutputContainer),s=this.findInModal(this.selectorContentContainer),n=void 0===t?this.activeLanguages:[t];let i=!0,o=this.activeExtensions;void 0!==a&&(o=[a],i=!1),this.packsUpdateDetails={toHandle:n.length*o.length,handled:0,updated:0,new:0,failed:0,skipped:0},e.empty().append($("<div>",{class:"progress"}).append($("<div>",{class:"progress-bar progress-bar-info",role:"progressbar","aria-valuenow":0,"aria-valuemin":0,"aria-valuemax":100,style:"width: 0;"}).append($("<span>",{class:"text-nowrap"}).text("0 of "+this.packsUpdateDetails.toHandle+" language "+LanguagePacks.pluralize(this.packsUpdateDetails.toHandle)+" updated")))),s.empty(),n.forEach((t=>{o.forEach((a=>{this.getNotificationBox().empty(),new AjaxRequest(Router.getUrl()).post({install:{action:"languagePacksUpdatePack",token:this.getModuleContent().data("language-packs-update-pack-token"),iso:t,extension:a}}).then((async t=>{const a=await t.resolve();!0===a.success?(this.packsUpdateDetails.handled++,"new"===a.packResult?this.packsUpdateDetails.new++:"update"===a.packResult?this.packsUpdateDetails.updated++:"skipped"===a.packResult?this.packsUpdateDetails.skipped++:this.packsUpdateDetails.failed++,this.packUpdateDone(i,n)):(this.packsUpdateDetails.handled++,this.packsUpdateDetails.failed++,this.packUpdateDone(i,n))}),(()=>{this.packsUpdateDetails.handled++,this.packsUpdateDetails.failed++,this.packUpdateDone(i,n)}))}))}))}packUpdateDone(t,a){const e=this.getModalBody(),s=this.findInModal(this.selectorOutputContainer);if(this.packsUpdateDetails.handled===this.packsUpdateDetails.toHandle){const s=InfoBox.render(Severity.ok,"Language packs updated",this.packsUpdateDetails.new+" new language "+LanguagePacks.pluralize(this.packsUpdateDetails.new)+" downloaded, "+this.packsUpdateDetails.updated+" language "+LanguagePacks.pluralize(this.packsUpdateDetails.updated)+" updated, "+this.packsUpdateDetails.skipped+" language "+LanguagePacks.pluralize(this.packsUpdateDetails.skipped)+" skipped, "+this.packsUpdateDetails.failed+" language "+LanguagePacks.pluralize(this.packsUpdateDetails.failed)+" not available");this.addNotification(s),!0===t?new AjaxRequest(Router.getUrl()).post({install:{action:"languagePacksUpdateIsoTimes",token:this.getModuleContent().data("language-packs-update-iso-times-token"),isos:a}}).then((async t=>{if(!0===(await t.resolve()).success)this.getData();else{const t=FlashMessage.render(Severity.error,"Something went wrong","");this.addNotification(t)}}),(t=>{Router.handleAjaxError(t,e)})):this.getData()}else{const t=this.packsUpdateDetails.handled/this.packsUpdateDetails.toHandle*100;s.find(".progress-bar").css("width",t+"%").attr("aria-valuenow",t).find("span").text(this.packsUpdateDetails.handled+" of "+this.packsUpdateDetails.toHandle+" language "+LanguagePacks.pluralize(this.packsUpdateDetails.handled,"pack","s",this.packsUpdateDetails.toHandle)+" updated")}}languageMatrixHtml(t){const a=this.findInModal(this.selectorActivateLanguageIcon).html(),e=this.findInModal(this.selectorDeactivateLanguageIcon).html(),s=this.findInModal(this.selectorLanguageUpdateIcon).html(),n=this.getModuleContent().data("configuration-is-writable"),i=$("<div>"),o=$("<tbody>");t.languages.forEach((t=>{const i=[],d=t.active;n&&i.push($("<a>",{class:"btn btn-default t3js-languagePacks-deactivateLanguage","data-iso":t.iso,title:"Deactivate"}).append(e)),i.push($("<a>",{class:"btn btn-default t3js-languagePacks-update","data-iso":t.iso,title:"Download language packs"}).append(s));const l=$("<tr>");d?o.append(l.append($("<td>").text(" "+t.name).prepend($("<div />",{class:"btn-group"}).append(i)))):(n&&i.push($("<a>",{class:"btn btn-default t3js-languagePacks-activateLanguage","data-iso":t.iso,title:"Activate"}).append(a)),o.append(l.addClass("t3-languagePacks-inactive t3js-languagePacks-inactive").css({display:"none"}).append($("<td>").text(" "+t.name).prepend($("<div />",{class:"btn-group"}).append(i))))),l.append($("<td>").text(t.iso),$("<td>").text(t.dependencies.join(", ")),$("<td>").text(null===t.lastUpdate?"":t.lastUpdate)),o.append(l)}));const d=[];return n&&d.push($("<button>",{class:"btn btn-default t3js-languagePacks-addLanguage-toggle",type:"button"}).append($("<span>").append(a)," Add language")),d.push($("<button>",{class:"btn btn-default disabled update-all t3js-languagePacks-update",type:"button",disabled:"disabled"}).append($("<span>").append(s)," Update all")),i.append($("<h3>").text("Active languages"),$("<table>",{class:"table table-striped table-bordered"}).append($("<thead>").append($("<tr>").append($("<th>").append($("<div />",{class:"btn-group"}).append(d)),$("<th>").text("Locale"),$("<th>").text("Dependencies"),$("<th>").text("Last update"))),o)),Array.isArray(this.activeLanguages)&&this.activeLanguages.length&&i.find(".update-all").removeClass("disabled").removeAttr("disabled"),i.html()}extensionMatrixHtml(t){const a=new SecurityUtility,e=this.findInModal(this.selectorLanguageUpdateIcon).html();let s,n="",i=0;const o=$("<div>"),d=$("<tr>");d.append($("<th>").text("Extension"),$("<th>").text("Key")),t.activeLanguages.forEach((t=>{d.append($("<th>").append($("<a>",{class:"btn btn-default t3js-languagePacks-update","data-iso":t,title:"Download and update all language packs"}).append($("<span>").append(e)," "+t)))}));const l=$("<tbody>");return t.extensions.forEach((o=>{i++,s=void 0!==o.icon?$("<span>").append($("<img>",{style:"max-height: 16px; max-width: 16px;",src:o.icon,alt:o.title}),$("<span>").text(" "+o.title)):$("<span>").text(o.title);const d=$("<tr>");d.append($("<td>").html(s.html()),$("<td>").text(o.key)),t.activeLanguages.forEach((t=>{let s=!1;if(o.packs.forEach((i=>{if(i.iso!==t)return;s=!0;const l=$("<td>");d.append(l),n=!0!==i.exists?null!==i.lastUpdate?"No language pack available for "+i.iso+" when tried at "+i.lastUpdate+". Click to re-try.":"Language pack not downloaded. Click to download":null===i.lastUpdate?"Downloaded. Click to renew":"Language pack downloaded at "+i.lastUpdate+". Click to renew",l.append($("<a>",{class:"btn btn-default t3js-languagePacks-update","data-extension":o.key,"data-iso":i.iso,title:a.encodeHtml(n)}).append(e))})),!s){const t=$("<td>");d.append(t).append("&nbsp;")}})),l.append(d)})),o.append($("<h3>").text("Translation status"),$("<table>",{class:"table table-striped table-bordered"}).append($("<thead>").append(d),l)),0===i?InfoBox.render(Severity.ok,"Language packs have been found for every installed extension.","To download the latest changes, use the refresh button in the list above."):o.html()}getNotificationBox(){return this.findInModal(this.selectorNotifications)}addNotification(t){this.notifications.push(t)}renderNotifications(){const t=this.getNotificationBox();for(const a of this.notifications)t.append(a);this.notifications=[]}}export default new LanguagePacks;