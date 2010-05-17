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

/* Creates a SmoothMovement. A SmoothMovement produces integer position values
 * representing movement towards a target position, with a maximum acceleration
 * or deceleration of one distance unit per time unit squared. The parameters
 * are:
 *
 * position - the initial position
 * target   - the target position
 * velocity - the initial velocity. The first call to the updatePosition
 *            function will adjust the position by this value. This parameter is
 *            optional, and if it is not present it is assumed to be 0.
 *
 * All three parameters are rounded to the nearest integer.
 */
function SmoothMovement(position, target, velocity){

  // initialise the position, target, and velocity
  position = Math.round(position);
  target   = Math.round(target);
  velocity = (velocity ? Math.round(velocity) : 0);

  /* Updates the position and velocity of this SmoothMovement and returns the
   * new position. The position is updated before the new velocity is
   * calculated, so the position is adjusted by the initial velocity the first
   * time this function is called. If this SmoothMovement was created with an
   * initial velocity of 0, or without the initial velocity being specified, the
   * position will not change the first time this function is called.
   *
   * The velocity changes by at most a single unit. The velocity decreases if
   * this SmoothMovement would otherwise overshoot the target position (which
   * may still occur if the initial velocity was too great). The velocity
   * increases if doing so will not lead to this SmoothMovement overshooting the
   * target position. In all other cases, the velocity does not change.
   */
  this.updatePosition = function(){
    position += velocity;
    if (velocity < 0){
      if (position - velocity * (velocity  - 1) / 2 < target){
        velocity++;
      }else if (position - (velocity - 1) * (velocity - 2) / 2 >= target){
        velocity--;
      }
    }else{
      if (position + velocity * (velocity + 1) / 2 > target){
        velocity--;
      }else if (position + (velocity + 1) * (velocity + 2) / 2 <= target){
        velocity++;
      }
    }
    return position;
  }
  
  /* Changes the target position of this SmoothMovement will maintaining its
   * current position and velocity. The parameter is:
   *
   * newTarget - the new target position, which is rounded to the nearest
   *             integer
   */
  this.changeTarget = function(newTarget){
    target = Math.round(newTarget);
  }
  
  /* Returns the current position of this SmoothMovement.
   */
  this.getPosition = function(){
    return position;
  }

  /* Returns the current velocity of this SmoothMovement.
   */
  this.getVelocity = function(){
    return velocity;
  }
  
  /* Returns true if this SmoothMovement has stopped, and false otherwise. This
   * SmoothMovement has stopped if its position equals its target position and
   * its velocity is 0.
   */
  this.hasStopped = function(){
    return (position == target && velocity == 0);
  }

}