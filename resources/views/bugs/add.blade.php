@extends('layout.index')

@section('css')
@endsection

@section('content')
<div id="app">
    <el-form>
        <el-row :gutter="20">
            <el-col :xs="24" :sm="12" :md="12">
                <h1>Add bug</h1>
            </el-col>

        </el-row>
        <el-row :gutter="20">
            <el-col :xs="24" :sm="12" :md="12">
                <el-form-item label="description">
                    <el-input v-model="bug.description"></el-input>
                </el-form-item>
            </el-col>
        </el-row>
        <el-row :gutter="20">
            <el-col :xs="24" :sm="12" :md="12">
                <el-form-item label="summary">
                    <el-input v-model="bug.summary"></el-input>
                </el-form-item>
            </el-col>
        </el-row>
        <el-row :gutter="20">
            <el-col :xs="24" :sm="12" :md="12">
                <el-button @click="add">Submit</el-button>
            </el-col>
        </el-row>
    </el-form>
</div>
@endsection

@section('js')
    <script>
        new Vue({
            'el': '#app',
            data() {
                return {
                    bug: {
                        description: '',
                        summary: '',
                    },
                };
            },
            methods: {
                add() {
                    axios.get('/bug', this.bug).then(response => {
                        console.log(response.data);
                    }).catch(error => {
                        console.log(error);
                    });
                },
            },
        })
    </script>
@endsection
