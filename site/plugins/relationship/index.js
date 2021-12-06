(function () {var a={inheritAttrs:!1,props:{items:Array,selected:{type:Array,default:function(){return[]}},sortable:Boolean,multiselectable:Boolean,deletable:Boolean},data:function(){return{focused:null,activedescendant:null}},methods:{clickItem:function(t){this.multiselectable&&this.toggleItem(t)},focusFirstItem:function(){var t=this.items[0];t&&this.focusItem(t)},focusItem:function(t){this.focused=t,this.activedescendant=this._uid+t.value,this.scrollIntoView(t)},focusLastItem:function(){var t=this.items[this.items.length-1];t&&this.focusItem(t)},focusNextItem:function(){if(this.focused){var t=this.items[this.getIndex(this.focused)+1];t&&this.focusItem(t)}else this.focusFirstItem()},focusPrevItem:function(){if(this.focused){var t=this.items[this.getIndex(this.focused)-1];t&&this.focusItem(t)}else this.focusFirstItem()},getIndex:function(t){return this.items.findIndex(function(e){return e.value===t.value})},isFocused:function(t){return t===this.focused},isSelected:function(t){for(var e=0;e<this.selected.length;e++)if(this.selected[e].value===t.value)return!0;return!1},moveDown:function(t){var e=this.getIndex(t);if(e<this.items.length-1){var s=this.items[e+1];this.items[e+1]=t,this.items[e]=s,this.onInput(this.items)}},moveUp:function(t){var e=this.getIndex(t);if(e>0){var s=this.items[e-1];this.items[e-1]=t,this.items[e]=s,this.onInput(this.items)}},onBlur:function(){this.sortable&&(this.selected=[])},onInput:function(t){this.$emit("input",t)},onKeyDown:function(){this.sortable&&this.focused&&this.isSelected(this.focused)?this.moveDown(this.focused):this.focusNextItem()},onKeySpace:function(){this.focused&&this.toggleItem(this.focused)},onKeyUp:function(){this.sortable&&this.focused&&this.isSelected(this.focused)?this.moveUp(this.focused):this.focusPrevItem()},removeItem:function(t){if(!this.deletable||!t)return!1;var e=this.items.indexOf(t);-1!==e&&this.items.splice(e,1),this.onInput(this.items)},scrollIntoView:function(t){},selectItem:function(t){this.selected.push(t),this.onInput(this.items)},setupFocus:function(){this.focused||this.focusFirstItem()},toggleItem:function(t){this.isSelected(t)?this.unselectItem(t):(this.multiselectable||(this.selected=[]),this.selectItem(t))},unselectItem:function(t){for(var e=0;e<this.selected.length;e++)if(this.selected[e].value===t.value)return this.selected.splice(e,1),void this.onInput(this.items)}}};if(typeof a==="function"){a=a.options}Object.assign(a,function(){var render=function(){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;return _c("k-draggable",{attrs:{"element":"ul","list":_vm.items,"options":{disabled:!_vm.sortable,handle:".relationship-item-sort",animation:150,forceFallback:true},"data-sortable":_vm.sortable,"data-multiselectable":_vm.multiselectable,"data-deletable":_vm.deletable,"aria-readonly":"","aria-activedescendant":_vm.activedescendant,"aria-label":"","role":"listbox","tabindex":"0"},on:{"change":_vm.onInput},nativeOn:{"focus":function($event){return _vm.setupFocus($event)},"blur":function($event){return _vm.onBlur($event)},"keydown":[function($event){if(!$event.type.indexOf("key")&&_vm._k($event.keyCode,"space",32,$event.key,[" ","Spacebar"])){return null}$event.preventDefault();return _vm.onKeySpace($event)},function($event){if(!$event.type.indexOf("key")&&_vm._k($event.keyCode,"up",38,$event.key,["Up","ArrowUp"])){return null}$event.preventDefault();return _vm.onKeyUp($event)},function($event){if(!$event.type.indexOf("key")&&_vm._k($event.keyCode,"down",40,$event.key,["Down","ArrowDown"])){return null}$event.preventDefault();return _vm.onKeyDown($event)},function($event){if(!$event.type.indexOf("key")&&_vm._k($event.keyCode,"delete",[8,46],$event.key,["Backspace","Delete","Del"])){return null}$event.preventDefault();return _vm.removeItem(_vm.focused)}]}},_vm._l(_vm.items,function(item){return _c("li",{staticClass:"relationship-item",class:{"is-focused":_vm.isFocused(item)},attrs:{"id":_vm._uid+item.value,"aria-selected":_vm.isSelected(item),"role":"option"},on:{"mousedown":function($event){return _vm.focusItem(item)},"click":function($event){return _vm.clickItem(item)}}},[_vm.sortable?_c("k-icon",{staticClass:"relationship-item-sort",attrs:{"type":"sort"}}):_vm._e(),_vm._v(" "),_c("span",{staticClass:"relationship-item-label"},[_vm._v(_vm._s(item.text))]),_vm._v(" "),_vm.multiselectable?_c("k-button",{attrs:{"tabindex":"-1","icon":"add"}}):_vm._e(),_vm._v(" "),_vm.deletable?_c("k-button",{attrs:{"tabindex":"-1","icon":"remove"},on:{"click":function($event){return _vm.removeItem(item)}}}):_vm._e()],1)}),0)};var staticRenderFns=[];return{render:render,staticRenderFns:staticRenderFns,_compiled:true,_scopeId:null,functional:undefined}}());var b={inheritAttrs:!1,components:{"relationship-listbox":a},props:{autofocus:Boolean,counter:{type:Boolean,default:!0},disabled:Boolean,help:String,id:{type:[Number,String],default:function(){return this._uid}},label:String,max:Number,min:Number,name:String,options:{type:Array,default:function(){return[]}},required:Boolean,search:Boolean,value:{type:Array,default:function(){return[]}},multiselectable:String},data:function(){return{selected:this.value,query:""}},computed:{counterOptions:function(){return null!==this.value&&!this.disabled&&!1!==this.counter&&{count:this.value&&Array.isArray(this.value)?this.value.length:0,min:this.min,max:this.max}},filteredOptions:function(){var t=this;return this.options.filter(function(e){return e.text.toLowerCase().includes(t.query.toLowerCase())})}},watch:{value:function(t){this.selected=t}},mounted:function(){console.log(this.value)},methods:{onInput:function(){this.$emit("input",this.selected)}},validations:function(){return{}}};if(typeof b==="function"){b=b.options}Object.assign(b,function(){var render=function(){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;return _c("k-field",_vm._b({staticClass:"kirby-relationship-field",attrs:{"counter":_vm.counterOptions}},"k-field",_vm.$props,false),[_vm.search?_c("div",{staticClass:"relationship-search"},[_c("k-input",{attrs:{"theme":"field","type":"text","spellcheck":"false","icon":"search"},model:{value:_vm.query,callback:function($$v){_vm.query=$$v},expression:"query"}})],1):_vm._e(),_vm._v(" "),_c("div",{staticClass:"relationship-lists"},[_c("relationship-listbox",{staticClass:"relationship-list",attrs:{"items":_vm.filteredOptions,"selected":_vm.selected,"multiselectable":true,"sortable":false,"deletable":false},on:{"input":_vm.onInput}}),_vm._v(" "),_c("relationship-listbox",{staticClass:"relationship-list",attrs:{"items":_vm.selected,"multiselectable":false,"sortable":true,"deletable":true},on:{"input":_vm.onInput}})],1)])};var staticRenderFns=[];return{render:render,staticRenderFns:staticRenderFns,_compiled:true,_scopeId:null,functional:undefined}}());panel.plugin("olach/relationship",{fields:{relationship:b}});})();