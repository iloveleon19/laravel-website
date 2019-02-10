import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter as Router, Route, Switch, Link } from 'react-router-dom';

export default class ManagePost extends Component {
    componentDidMount() {
        document.title = "Manage Post";
        this.handleLoadData();
    }

    constructor(props) {
        super(props);
        
        this.state = {
            data: []
        }

        this.createTbody = this.createTbody.bind(this);
    }

    createTbody(data) {
        let table = [];
        let length = data.length;

        // Outer loop to create parent
        for (let i=0; i<length; i++) {
            table.push(
                <tr key={data[i].id}>
                    <td>{data[i].header}</td>
                    <td>{data[i].title}</td>
                    <td>{data[i].created_at}</td>
                    <td>{data[i].updated_at}</td>
                    {/* <td><button type="button" className="btn btn-success btn-sm">edit</button></td> */}
                    <td><button type="button" className="btn btn-danger btn-sm" onClick={this.handleDelete.bind(this, data[i].id)}>delete</button></td>
                </tr>
            )
        }
        return table;
    }

    handleLoadData() {
        axios.get('/backend/posts', this.state).then(response => {
            if (response.status===200) {
                this.setState({data: response.data});
            }
        }).catch(error => {
                console.log(error);
        });
    }

    handleDelete(id) {
        axios.delete(`/backend/posts/${id}`, {'data': {'id':id}}).then(response => {
            if (response.status===200) {
                alert('sucessed !!');
                this.handleLoadData();
            } else if (response.status===204) {
                alert('delete failed');
            }
        }).catch(error => {
                console.log(error);
        });
    };

    render() {
        return (
            <div className="container">
                <main role="main" className="col-md-9 ml-sm-auto col-lg-10 px-4">
                    <h2>Post List</h2>
                    <div className="table-responsive">
                        <table className="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>Header</th>
                                    <th>Title</th>
                                    <th>Create At</th>
                                    <th>Update At</th>
                                    {/* <th></th> */}
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                {this.createTbody(this.state.data)}
                            </tbody>
                        </table>
                        {/* <nav aria-label="Page navigation example">
                            <ul className="pagination justify-content-center">
                                <li className="page-item disabled">
                                    <a className="page-link" href="#" tabIndex="-1">Previous</a>
                                </li>
                                <li className="page-item active"><a className="page-link" href="#">1 <span className="sr-only">(current))</span> </a></li>
                                <li className="page-item"><a className="page-link" href="#">2</a></li>
                                <li className="page-item"><a className="page-link" href="#">3</a></li>
                                <li className="page-item">
                                    <a className="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav> */}
                    </div>
                </main>
            </div>
        );
    }
}
