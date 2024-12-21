import{C as s}from"./EventListnerManager-CB5a1GMq.js";import{P as l}from"./PageManager-Cgue3mZy.js";class c extends l{constructor(){super("header-component")}async load(){this.data={title:"Header Component",description:"Header Component"},this.data.header_categories=await s.SS.search("header-categories"),s.debugLog(this.data.header_categories)}init(){s.debugLog("HeaderComponentManager initialized"),this.can_have_header=!!document.getElementById("magHeaderLevel1Container"),this.can_have_header&&this.initNavigationComponent()}setListners(){this.can_have_header&&this.setHeaderLevel1Events()}actions(){console.log(this.listners)}initNavigationComponent(){const e=document.getElementById("magHeaderLevel1Container");e.innerHTML="",e.appendChild(this.createHeaderCategoryComponent()),this.createSidebarCategoryComponent()}createHeaderCategoryComponent(e,a,t){const n=document.createElement("div");return n.classList.add("mag-header-level1-container","d-flex","gap-2"),this.data.header_categories.forEach(r=>{n.appendChild(this.createLevel1CategoryBlock(r))}),n}createLevel1CategoryBlock(e){const a=document.createElement("div");return a.classList.add("mag-header-level1"),a.innerHTML=`
        <div class="mag-header-level1-block">
            <a  data-primary-category="${e.name}" href="/${e.slug}" class="">${e.name}</a>
        </div>
        `,a}createLevel2CategoryBlock(e,a){const t=document.createElement("div");return t.classList.add("mag-header-level2","mag-header-level2-block"),t.innerHTML=`
            <a href="/${a}/${e.slug}"  data-primary-category="${e.name}" data-main-category="${e.name}" class="">${e.name}</a>
        `,t}createLevel3CategoryBlock(e,a,t){const n=document.createElement("div");return n.classList.add("mag-header-level3","mag-header-level3-block"),n.innerHTML=`
            <link href="/${a}/${t}/${e.slug}" class="text-decoration-none text-black">${e.name}</link>
        `,n}setHeaderLevel1Events(){this.ELM.setMouseOverListners(".mag-header-level1-block a",e=>{const a=e.target.dataset.primaryCategory,t=this.data.header_categories.find(r=>r.name===a),n=document.getElementById("magHeaderLevel2Container");n.innerHTML="",t.main_categories.forEach(r=>{n.appendChild(this.createLevel2CategoryBlock(r,t.slug))}),this.setHeaderLevel2Events(),document.querySelectorAll(".mag-header-level1-block a").forEach(r=>{const o="iz-text-primary-600";r.classList.remove(o),e.target.classList.add(o)})})}setHeaderLevel2Events(){this.ELM.setMouseOverListners(".mag-header-level2 a",e=>{const a=e.target.dataset.primaryCategory,t=e.target.dataset.mainCategory;console.log(a),console.log(t);const r=this.data.header_categories.find(o=>o.name===a).find(o=>o.name===t);console.log(r)})}extractURLParts(){return window.location.pathname.split("/").filter(Boolean)}createSidebarCategoryComponent(){}}setTimeout(()=>{d()},1500);document.addEventListener("DOMContentLoaded",async function(){d(),await fetch("/sanctum/csrf-cookie"),new c});const d=()=>{const i=document.getElementById("spinner");i&&i.remove(),s.debugLog("Spinner paused")};
