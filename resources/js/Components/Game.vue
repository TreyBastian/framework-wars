<script setup lang="ts">
import TabularMultiSelect from './TabularMultiSelect.vue';
</script>
<template>
    <section>
        <header>
            <img src="https://i.pravatar.cc/48" alt="avatar" />
            <section>
                <h3>Trey Bastian</h3>
                <span>Day 45</span>
                <br />
                <span>Current Location</span>
            </section>
            <section>
                <table>
                    <tbody>
                        <tr>
                            <th>Cash</th>
                            <td>$1432.42</td>
                        </tr>
                        <tr>
                            <th>Bank</th>
                            <td>$241.23</td>
                        </tr>
                        <tr>
                            <th>Debt</th>
                            <td>-$9438.32</td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </header>
        <hr />
        <TabularMultiSelect
            :header="['Frameowrk', 'Price']"
            :keys="['name', 'price']"
            :data="[
                { id: 1, name: 'React', price: '43921' },
                { id: 2, name: 'Vue', price: '43921' },
            ]"
        />
        <TabularMultiSelect
            :header="['Frameowrk', 'Quantity']"
            :keys="['name', 'quantity']"
            :data="[{ id: 1, name: 'React', quantity: '50' }]"
        />
    </section>
</template>
