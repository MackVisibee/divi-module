// External Dependencies
import React, { Component, Fragment } from 'react';

// Internal Dependencies
import './style.css';


class SimpleHeader extends Component {

  static slug = 'simp_simple_extension';

  render() {
    return (
      <Fragment>
          <h1 className='simp-simple-extension-header'>{this.props.heading}</h1>
          <p className='gg'>{this.props.content()}</p>
      </Fragment>
      
    );
  }
}

export default SimpleHeader;
