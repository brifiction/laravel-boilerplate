<template>
    <div class="input-group">
        <input id="password" :type="inputType" v-model="password"
               class="form-control"
               name="password" required autocomplete="current-password">
        <div class="input-group-append">
            <span class="input-group-text">
                <i class="fas" style="cursor: pointer;" :class="[passwordFontAwesome]" @click="hidePassword = !hidePassword"></i>
            </span>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                password: '',
                hidePassword: true
            };
        },
        computed: {
            inputType() {
                return this.hidePassword ? 'password' : 'text'
            },
            passwordFontAwesome() {
                return this.hidePassword ? 'fa-eye' : 'fa-eye-slash'
            }
        }
    }
</script>
