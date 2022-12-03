// External Dependencies
import React, { Component, Fragment } from 'react';

// Internal Dependencies
import './gg.css';


class SimpleBox extends Component {

  static slug = 'simp_simple_box';

  render() {
    return (
      <Fragment>
          <h1 className='simp-simple-box-heading-front'>{this.props.heading}</h1>
      </Fragment>
      
    )
  }
}

export default SimpleBox;
