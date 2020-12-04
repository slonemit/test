<template>
<div class="contentbar">
    <!-- Start row -->
    <div v-if="participants.length > 0" class="row">
        <!-- Start col -->
        <div class="col-lg-5 col-xl-4">
            <div class="chat-list">
                <div class="chat-search">
                    <form>
                        <div class="input-group">
                            <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon3">
                            <div class="input-group-append">
                                <button class="btn" type="submit" id="button-addon3"><i class="feather icon-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="chat-user-list">
                    <ul class="list-unstyled mb-0">
                        <li v-for="participant in participants" :key="participant.meeting_id" @click="show_thread(participant)" class="media">
                            <img class="align-self-center rounded-circle" src="/assets/images/users/girl.svg" alt="Generic placeholder image">
                            <div class="media-body">
                                <h5>{{ participant.user.name }}<span class="badge badge-success ml-2">1</span> <span class="timing">Jan 22</span></h5>
                                <p>Admin</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-7 col-xl-8">
            <div class="chat-detail">
                <div class="chat-head">
                    <ul class="list-unstyled mb-0">
                        <li class="media">
                            <img class="align-self-center mr-3 rounded-circle" src="/assets/images/users/girl.svg" alt="Generic placeholder image">
                            <div class="media-body">
                                <h5 class="font-18">{{ meeting_name }}</h5>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="chat-body">
                    <div class="chat-day text-center mb-3">
                        <span class="badge badge-secondary">Today</span>
                    </div>
                    <div v-for="chat in chat_box" :key="chat.id" class="chat-message " :class="user_id == chat.user_id? ' chat-message-right':' chat-message-left'">
                        <div v-if="chat.statut_mess != -1" class="chat-message-text">
                            <span>{{ chat.content_mess }}</span>
                        </div>
                        <div v-if="chat.statut_mess != -1" class="chat-message-meta">
                            <span>{{ chat.date_message }}<i class="feather icon-check ml-2"></i></span>
                        </div>
                    </div>
                </div>
                <div class="chat-bottom">
                    <div class="chat-messagebar">
                        <form>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button class="btn btn-secondary-rgba" type="button" id="button-addonmic"><i class="feather icon-mic"></i></button>
                                </div>
                                <input @keyup.enter.prevent="postMessage()" v-model="content_message" type="text" class="form-control" placeholder="Type a message..." aria-label="Text">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary-rgba" type="submit" id="button-addonlink"><i class="feather icon-link"></i></button>
                                    <button @click="postMessage()" class="btn btn-primary-rgba" type="button" id="button-addonsend"><i class="feather icon-send"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
    </div>
    <!-- End row -->
</div>
</template>

<script>
export default {
    props: ['participants', 'messages', 'user_id'],
    data() {
        return {
            content_message: '',
            meeting_id: 0,
            meeting_name: '',
            chat_box: []
        }
    },
    methods: {
        show_thread(participant) {
            let msg = this.messages

            for (const i in msg) {

                if (participant.meeting_id == i) {
                    this.chat_box = msg[i]

                    msg[i].some(el => {
                        if (el.user_id != this.user_id) {
                            this.meeting_name = el.user.name
                            this.meeting_id = el.meeting_id
                            return true
                        }
                    })

                    break
                }
            }

        },
        postMessage() {

            const url = 'http://b2b.test/chats'
            const data = {
                content_mess: this.content_message,
                meeting_id: this.meeting_id
            }
            const option = {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify(data)
            }
            fetch(url, option)
                .then(response => response.json())
                .then(response => {

                    if (response.code === 200) {
                        this.chat_box.push(response.message)
                        this.content_message = ''
                    }
                })
        }
    },
    created() {
        let msg = this.messages
        let users = this.participants

        if(users[0] !== undefined){
            this.meeting_name = users[0].user.name
            this.meeting_id = users[0].meeting_id
            this.chat_box = msg[this.meeting_id]
        }
    },
    mounted() {
        console.log('Component mounted.')
    }
}
</script>
