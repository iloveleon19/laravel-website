import React, { Component } from 'react';
// import ReactDOM from 'react-dom';
import { BrowserRouter as Router, Route, Switch, Link } from 'react-router-dom';

export default class NewPost extends Component {
    componentDidMount() {
        document.title = "New Post";
    }

    constructor(props) {
        super(props);
        
        this.state = {
            cardHeader: '',
            cardTitle: '',
            cardText: '',
            imageFile: '',
            imageName: '',
            activeSelect: '1'
        }

        this.handleInputChange = this.handleInputChange.bind(this);
        this.handleFileChange = this.handleFileChange.bind(this);
        this.handleSubmit = this.handleSubmit.bind(this);
    }

    handleInputChange(event) {
        const target = event.target;
        const value = target.type === 'checkbox' ? target.checked : target.value;
        const name = target.name;
    
        this.setState({
            [name]: value
        });
    }

    handleFileChange(e) {
        this.setState({
            imageName: e.target.value
        });
        let files = e.target.files || e.dataTransfer.files;
        if (!files.length) {
            return;
        }
        this.createImage(files[0]);
    }

    handleSubmit(e) {
        e.preventDefault();
        axios.post('/backend/posts', this.state).then(response => {
            if (response.status===200) {
                alert('sucessed !!');
                this.setState({
                    cardHeader: '',
                    cardTitle: '',
                    cardText: '',
                    imageFile: '',
                    imageName: '',
                    activeSelect: '1'
                });
            }
        }).catch(error => {
            console.log(error);
        });
    }

    createImage(file) {
        let reader = new FileReader();
        reader.onload = (e) => {
          this.setState({
            imageFile: e.target.result
          });
        };
        reader.readAsDataURL(file);
    }

    render() {
        return (
            <div className="container">
                <main role="main" className="col-md-9 ml-sm-auto col-lg-10 px-4">
                    <h2>new post</h2>
                    <form onSubmit={this.handleSubmit}>
                        <div className="form-group">
                            <label htmlFor="cardHeader">Header</label>
                            <input
                                type="text"
                                className="form-control"
                                id="cardHeader"
                                name="cardHeader"
                                onChange={this.handleInputChange}
                                value={this.state.cardHeader}
                                autoFocus
                                required={true}
                            />
                        </div>
                        <div className="form-group">
                            <label htmlFor="cardTitle">Title</label>
                            <input
                                type="text"
                                className="form-control"
                                id="cardTitle"
                                name="cardTitle"
                                onChange={this.handleInputChange}
                                value={this.state.cardTitle}
                                required={true}
                            />
                        </div>
                        <div className="form-group">
                            <label htmlFor="activeSelect">State select</label>
                            <select className="form-control" id="activeSelect" name="activeSelect" value={this.state.activeSelect} onChange={this.handleInputChange}>
                                <option value="1">active</option>
                                <option value="0">passive</option>
                            </select>
                        </div>
                        <div className="form-group">
                            <label htmlFor="imageFile">image input</label>
                            <input
                                type="file"
                                className="form-control-file"
                                id="imageName"
                                name="imageName"
                                accept="image/x-png,image/gif,image/jpeg" 
                                value={this.state.imageName}
                                onChange={this.handleFileChange}
                                required={true}
                            />
                        </div>
                        <div className="form-group">
                            <label htmlFor="cardText">Text</label>
                            <textarea
                                className="form-control"
                                id="cardText"
                                name="cardText"
                                rows="10"
                                value={this.state.cardText}
                                onChange={this.handleInputChange}
                                required={true}
                            ></textarea>
                        </div>
                        <button type="submit" className="btn btn-primary">Submit</button>
                    </form>
                </main>
            </div>
        );
    }
}