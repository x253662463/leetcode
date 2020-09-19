<?php
/**
 * Given two sorted arrays nums1 and nums2 of size m and n respectively, return the median of the two sorted arrays.
 *
 * Follow up: The overall run time complexity should be O(log (m+n)).
 *
 *
 *
 * Example 1:
 *
 * Input: nums1 = [1,3], nums2 = [2]
 * Output: 2.00000
 * Explanation: merged array = [1,2,3] and median is 2.
 * Example 2:
 *
 * Input: nums1 = [1,2], nums2 = [3,4]
 * Output: 2.50000
 * Explanation: merged array = [1,2,3,4] and median is (2 + 3) / 2 = 2.5.
 * Example 3:
 *
 * Input: nums1 = [0,0], nums2 = [0,0]
 * Output: 0.00000
 * Example 4:
 *
 * Input: nums1 = [], nums2 = [1]
 * Output: 1.00000
 * Example 5:
 *
 * Input: nums1 = [2], nums2 = []
 * Output: 2.00000
 *
 *
 * Constraints:
 *
 * nums1.length == m
 * nums2.length == n
 * 0 <= m <= 1000
 * 0 <= n <= 1000
 * 1 <= m + n <= 2000
 * -106 <= nums1[i], nums2[i] <= 106
 */


class solution
{

    /**
     * 时间复杂度O(m+n)
     * @param $nums1
     * @param $nums2
     * @return float|int|mixed
     */
    public function findMedianSortedArrays($nums1, $nums2) {
        $array = [];
        $key1 = $key2 = 0;
        $len = count($nums1) + count($nums2);
        for ($i = 0; $i < $len; $i++) {
            if (is_null($nums1[$key1])) {
                $array[$i] = $nums2[$key2];
                $key2++;
                continue;
            }
            if (is_null($nums2[$key2])) {
                $array[$i] = $nums1[$key1];
                $key1++;
                continue;
            }
            if ($nums1[$key1] > $nums2[$key2]) {
                $array[$i] = $nums2[$key2];
                $key2++;
            } else {
                $array[$i] = $nums1[$key1];
                $key1++;
            }
        }
        if ($len % 2 == 1) {
            return $array[floor($len / 2)];
        } else {
            return ($array[floor($len / 2)] + $array[floor($len / 2) - 1]) / 2;
        }
    }
}
