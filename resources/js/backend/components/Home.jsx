import React, { Component } from 'react';
// import ReactDOM from 'react-dom';
import { BrowserRouter as Router, Route, Switch, Link } from 'react-router-dom';


export default class Home extends Component {
    componentDidMount() {
        document.title = "Backend Home"
      }
    render() {
        return (
            <div className="container">
                <p>Backend Homepage</p>
                {this.props.children}
            </div>
        );
    }
}
