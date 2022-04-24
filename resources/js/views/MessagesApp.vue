<template>
    <main class="flex flex-col h-screen max-h-screen overflow-hidden bg-gray-100">
        <div class="flex flex-row flex-1 w-full bg-white">
            <ContactsList
                :contacts="contacts"
                @selected="getMessages"
            ></ContactsList>
            <Conversation
                :contact="selectedContact"
                :messages="messages"
                @new="addMessage"
                @logout="logout"
            ></Conversation>
        </div>
    </main>
</template>

<script>
import Conversation from "../components/Conversation";
import ContactsList from "../components/ContactsList";
import { mapState } from 'vuex';

export default {
    components: {Conversation, ContactsList},
    data() {
        return {
            selectedContact: null,
            messages: [],
            contacts: []
        }
    },
    computed: {
        ...mapState({
            userId: state => state.user.id
        }),
    },
    mounted() {
        axios.get('/api/contacts')
            .then((response) => {
                const contacts = response.data.data;

                this.contacts = _.sortBy(contacts, [(contact) => {
                    return contact.last_message_at;
                }]).reverse();
            });
    },
    watch: {
        userId(userId) {
            Echo.private(`messages.${userId}`)
                .listen('NewMessage', (e) => {
                    this.handleIncoming(e.message);
                });
        }
    },
    methods: {
        addMessage(message) {
            this.messages.push(message);
        },
        async logout() {
            try {
                axios.post("/logout");
                this.$store.dispatch("logout");
                this.$router.push({ name: "auth-login" });
            } catch (error) {
                this.$store.dispatch("logout");
                this.$router.push({ name: "auth-login" });
            }
        },
        getMessages(contact) {
            this.updateUnreadCount(contact, true);
            axios.get(`/api/messages/${contact.id}`)
                .then((response) => {
                    this.messages = response.data.data;
                    this.selectedContact = contact;
                });
        },
        handleIncoming(message) {
            if (this.selectedContact && message.from === this.selectedContact.id) {
                message.from_profile_image = message.from_contact.profile_image;
                this.addMessage(message);
            }

            this.updateUnreadCount(message.from_contact, false);
            this.contacts = this.sortContacts();
        },
        updateUnreadCount(contact, reset) {
            this.contacts = this.contacts.map((single) => {
                if (single.id !== contact.id) {
                    return single;
                }

                if (reset) {
                    single.unread = 0;
                } else {
                    single.unread += 1;
                }

                return single;
            });
        },
        sortContacts() {
            return _.sortBy(this.contacts, [(contact) => {
                return contact.unread;
            }]).reverse();
        }
    }
}
</script>
