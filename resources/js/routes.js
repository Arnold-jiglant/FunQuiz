import Users from "./components/admin/Users"
import Players from "./components/admin/Players"
import TopicQuestions from "./components/admin/TopicQuestions"
import Topics from "./components/admin/Topics"
import Tags from "./components/admin/Tags"
import Profile from "./components/admin/Profile"
import LoadingSpinner from "./components/admin/shared/LoadingSpinner";

export const routes = [
    {path: '/', component: LoadingSpinner,name:'dashboard'},
    {path: '/users', component: Users,name:'users'},
    {path: '/players', component: Players,name:'players'},
    {path: '/topic/:id/questions', component: TopicQuestions,name:'topic.questions'},
    {path: '/topics', component: Topics,name:'topics'},
    {path: '/tags', component: Tags,name:'tags'},
    {path: '/profile/:id', component: Profile,name:'profile'},
];
