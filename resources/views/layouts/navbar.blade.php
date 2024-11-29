<aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-white">
       <ul class="space-y-2 font-medium">
          <li class="mt-[4rem]">
             <a href="{{url('/admin/index')}}" class="flex items-center p-2 text-gray-700 rounded-lg bg-[#ffbae9] hover:bg-[#ffd1f1]">

                <span class="ms-3">Dashboard</span>
             </a>
          </li>
          <li>
             <a href="{{url('/admin/question')}}" class="flex items-center p-2 text-gray-700 rounded-lg bg-[#f5f5f9] hover:bg-[#dcdcde]">

                <span class="flex-1 ms-3 whitespace-nowrap">ตารางคำถาม</span>
             </a>
          </li>
          <li>
             <a href="{{url('/admin/choice')}}" class="flex items-center p-2 text-gray-700 rounded-lg bg-[#f5f5f9] hover:bg-[#dcdcde]">

                <span class="flex-1 ms-3 whitespace-nowrap">ตารางตัวเลือก</span>

             </a>
          </li>
          <li>
             <a href="{{url('/admin/informant/index')}}" class="flex items-center p-2 text-gray-700 rounded-lg bg-[#f5f5f9] hover:bg-[#dcdcde]">

                <span class="flex-1 ms-3 whitespace-nowrap">ตารางผู้ให้ข้อมูล</span>
             </a>
          </li>
          <li>
             <a href="{{url('/admin/informant_scores/index')}}" class="flex items-center p-2 text-gray-700 rounded-lg bg-[#f5f5f9] hover:bg-[#dcdcde]">

                <span class="flex-1 ms-3 whitespace-nowrap">ตารางคะเเนนของผู้ให้ข้อมูล</span>
             </a>
          </li>
          <li>
             <a href="#" class="flex items-center p-2 text-gray-700 rounded-lg bg-[#f5f5f9] hover:bg-[#f5f5f9]">

                <span class="flex-1 ms-3 whitespace-nowrap">ออกจากระบบ</span>
             </a>
          </li>
       </ul>
    </div>
 </aside>
