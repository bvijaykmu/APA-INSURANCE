B(this,HYc,1)};IYc.prototype.setPosition=function(b){wB(this,1,b)};var JYc=function(b){kB(this,b,0,-1,null,null)};z(JYc,jB);JYc.prototype.Vq=function(){return O(this,1)};JYc.prototype.getMetadata=function(){return uB(this,IYc,3)};var KYc=function(b){kB(this,b,0,-1,null,null)};z(KYc,jB);var LYc=function(b){kB(this,b,0,-1,FYc,null)};z(LYc,jB);LYc.prototype.getMetadata=function(){return uB(this,KYc,4)};var MYc=function(b){kB(this,b,0,-1,null,null)};
z(MYc,jB);MYc.prototype.getQuery=function(){return O(this,2)};MYc.prototype.Kg=function(b){P(this,2,b)};var NYc=function(b,c){this.ha=b;this.le=c};NYc.prototype.getKey=p(xi);NYc.prototype.Ub=p(Oj);NYc.prototype.clone=function(){return new NYc(this.ha,this.le)};var OYc=function(b){this.ha=[];if(b)a:{if(b instanceof OYc){var c=b.sf();b=b.Ld();if(0>=this.Qd()){for(var d=this.ha,e=0;e<c.length;e++)d.push(new NYc(c[e],b[e]));break a}}else c=Gq(b),b=Fq(b);for(e=0;e<c.length;e++)this.insert(c[e],b[e])}};
t=OYc.prototype;t.insert=function(b,c){var d=this.ha;d.push(new NYc(b,c));b=d.length-1;c=this.ha;for(d=c[b];0<b;){var e=b-1>>1;if(c[e].getKey()>d.getKey())c[b]=c[e],b=e;else break}c[b]=d};t.remove=function(){var b=this.ha,c=b.length,d=b[0];if(!(0>=c)){if(1==c)mq(b);else{b[0]=b.pop();b=0;c=this.ha;for(var e=c.length,f=c[b];b<e>>1;){var g=2*b+1,k=2*b+2;g=k<e&&c[k].getKey()<c[g].getKey()?k:g;if(c[g].getKey()>f.getKey())break;c[b]=c[g];b=g}c[b]=f}return d.Ub()}};
t.Ld=function(){for(var b=this.ha,c=[],d=b.length,e=0;e<d;e++)c.push(b[e].Ub());return c};t.sf=function(){for(var b=this.ha,c=[],d=b.length,e=0;e<d;e++)c.push(b[e].getKey());return c};t.yq=function(b){return hq(this.ha,function(c){return c.Ub()==b})};t.Ec=function(b){return hq(this.ha,function(c){return c.getKey()==b})};t.clone=function(){return new OYc(this)};t.Qd=function(){return this.ha.length};t.isEmpty=function(){return lq(this.ha)};t.clear=function(){mq(this.ha)};
var PYc=function(b,c){qp.call(this);this.Yd=c||null};z(PYc,qp);PYc.prototype.hb=function(){this.Yd&&(this.Yd.dispose(),this.Yd=null)};PYc.prototype.getRootNode=p("Yd");var QYc=function(b,c){if(b.Yd)throw Error("gz");b.Yd=c},RYc=function(b,c,d,e){this.id=b;this.title=c;this.definition=d;this.ha=e;this.FP=e.medium;this.ra=e.high||this.FP};RYc.prototype.isValid=function(){r