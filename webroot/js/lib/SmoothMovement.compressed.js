/* SmoothMovement.js - facilitates the smooth movement of display components
 *
 * The author of this program, Safalra (Stephen Morley), irrevocably releases
 * all rights to this program, with the intention of it becoming part of the
 * public domain. Because this program is released into the public domain, it
 * comes with no warranty either expressed or implied, to the extent permitted
 * by law.
 *
 * For more public domain JavaScript code by the same author, visit:
 * http://www.safalra.com/programming/javascript/
 */

function SmoothMovement(_1,_2,_3){_1=Math.round(_1);_2=Math.round(_2);_3=(_3?Math.round(_3):0);this.updatePosition=function(){_1+=_3;if(_3<0){if(_1-_3*(_3-1)/2<_2){_3++;}else{if(_1-(_3-1)*(_3-2)/2>=_2){_3--;}}}else{if(_1+_3*(_3+1)/2>_2){_3--;}else{if(_1+(_3+1)*(_3+2)/2<=_2){_3++;}}}return _1;};this.changeTarget=function(_4){_2=Math.round(_4);};this.getPosition=function(){return _1;};this.getVelocity=function(){return _3;};this.hasStopped=function(){return (_1==_2&&_3==0);};}
