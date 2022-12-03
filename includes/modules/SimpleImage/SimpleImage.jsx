// External Dependencies
import React, { Component, Fragment } from 'react';

// Internal Dependencies
import './gg.css';


class SimpleImage extends Component {

  static slug = 'simp_simple_image';

  render() {
    return (
      <Fragment>
          <h1 className='simp-simple-box-heading'>
            <img src={this.props.src} alt="" />
          </h1>
      </Fragment>
      
    );
  }
}

export default SimpleImage;
